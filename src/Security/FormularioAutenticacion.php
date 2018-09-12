<?php
/**
 * Created by PhpStorm.
 * User: Juan Ramírez
 * Date: 08/09/2018
 * Time: 17:54
 */

namespace App\Security;


use App\Form\LoginForm;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class FormularioAutenticacion extends AbstractFormLoginAuthenticator
{
    private $formFactory;
    private $em;
    private $router;
    private $tm;

    use TargetPathTrait;

    public function __construct(
        FormFactoryInterface $formFactory,
        EntityManager $em,
        RouterInterface $router,
        CsrfTokenManagerInterface $tm
    ){
        $this->formFactory = $formFactory;
        $this->em = $em;
        $this->router = $router;
        $this->tm = $tm;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        return null;
    }

    protected function getLoginUrl()
    {
        return $this->router->generate('security_login');
    }

    public function supports(Request $request)
    {
        die("Entró en supports");
        return true;
    }


    public function getCredentials(Request $request)
    {
        $csrfToken = $request->request->get('_csrf_token');

        if (false === $this->tm->isTokenValid(new CsrfToken('authenticate', $csrfToken))) {
            throw new InvalidCsrfTokenException('Invalid CSRF token.');
        }

        $isLoginSutmit = $request->attributes->get('_route') === 'security_login' && $request->isMethod('POST');
        if(!$isLoginSutmit){
            return;
        }

        $form = $this->formFactory->create(LoginForm::class);
        $form->handleRequest($request);

        $data = $form->getData();
        dump($data);
        return $data;
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $username = $credentials['_username'];

        return $this->em->getRepository('App:Usuarios')
            ->findOneBy(['email' => $username]);
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        $password = $credentials['_password'];

        if($password == 'Sostenibles'){
            return true;
        }

        return false;
    }

}