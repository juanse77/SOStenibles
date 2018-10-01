<?php

namespace App\Controller;

use App\Entity\Proyectos;
use App\Entity\Usuarios;
use App\Form\LoginForm;
use App\Form\UsuariosType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * Description of AdminController
 *
 * @author Juan Ramírez
 */
class AdminController extends AbstractController {
	
	public function nuevo(){
		echo "nuevo proyecto<br>";
		die("todo");
	}

	public function login(AuthenticationUtils $authenticationUtils)
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        $form = $this->createForm(LoginForm::class, [
            '_username' => $lastUsername
        ]);

        return $this->render('security/login.html.twig', [
            'form' => $form->createView(),
            'error'         => $error
        ]);
    }

    public function logout()
    {
        throw new \Exception("No llegará nunca aquí.");
    }

    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = new Usuarios();
        $form = $this->createForm(UsuariosType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // 4) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('security_login');
        }

        return $this->render(
            'security/register.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * @param Usuarios $usuario
     * @return \Symfony\Component\HttpFoundation\Response
     * @IsGranted("ROLE_USER")
     */
    public function home(Usuarios $usuario)
    {
        if($usuario->getId() == $this->getUser()->getId()){
            return $this->render('sostenibles/home.html.twig', ['usuario' => $usuario]);
        }else{
            return $this->render('security/acceso_denegado.html.twig');
        }

    }

    /**
     * @param Proyectos $proyecto
     * @return \Symfony\Component\HttpFoundation\Response
     * @IsGranted("ROLE_USER")
     */
    public function logo(Proyectos $proyecto) {
        $proyecto_de_usuario = false;
        foreach ($proyecto->getApadrinamientos() as $apadrinamiento){
            if($apadrinamiento->getUser()->getId() == $this->getUser()->getId()){
                $proyecto_de_usuario = true;
            }
        }

        if($proyecto_de_usuario) {
            return $this->render('sostenibles/logo.html.twig', ['proyecto' => $proyecto]);
        }else{
            return $this->render('security/acceso_denegado.html.twig');
        }
    }
}
