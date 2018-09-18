<?php
/**
 * Created by PhpStorm.
 * User: Juan Ramírez
 * Date: 08/09/2018
 * Time: 17:54
 */

namespace App\Security;


use App\Repository\UsuariosRepository;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class FormularioAutenticacion extends AbstractFormLoginAuthenticator
{
    private $router;
    private $userRepo;
    private $usuario;

    use TargetPathTrait;

    public function __construct(
        UsuariosRepository $userRepo,
        RouterInterface $router
    ){
        $this->router = $router;
        $this->userRepo = $userRepo;
    }

    protected function getLoginUrl()
    {
        return $this->router->generate('security_login');
    }

    public function supports(Request $request)
    {
        return $request->attributes->get('_route') === 'security_login'
            && $request->isMethod('POST');
        //die("Entró en supports");
    }


    public function getCredentials(Request $request)
    {
        $login_form = $request->request->get('login_form');
        return [
            'email' => $login_form['_username'],
            'password' => $login_form['_password']
        ];

        //dd($request->request->all());
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        //dd($credentials);
        $this->usuario = $this->userRepo->findOneBy(['email' => $credentials['email']]);
        return $this->usuario;
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        //dd($user);

        return true;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        return new RedirectResponse($this->router->generate('home', ['id' => $this->usuario->getId()]));
    }

}