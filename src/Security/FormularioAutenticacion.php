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
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class FormularioAutenticacion extends AbstractFormLoginAuthenticator
{
    private $router;
    private $userRepo;
    private $usuario;
    /**
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    use TargetPathTrait;

    public function __construct(
        UsuariosRepository $userRepo,
        RouterInterface $router,
        UserPasswordEncoderInterface $encoder
    ){
        $this->router = $router;
        $this->userRepo = $userRepo;
        $this->encoder = $encoder;
    }

    public function supports(Request $request)
    {
        return $request->attributes->get('_route') === 'security_login'
            && $request->isMethod('POST');
    }


    public function getCredentials(Request $request)
    {
        $login_form = $request->request->get('login_form');
        $credentials = [
            'email' => $login_form['_username'],
            'password' => $login_form['_password']
        ];

        $request->getSession()->set(
            Security::LAST_USERNAME,
            $credentials['email']
        );

        return $credentials;
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $this->usuario = $this->userRepo->findOneBy(['email' => $credentials['email']]);
        return $this->usuario;
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        return $this->encoder->isPasswordValid($user, $credentials['password']);
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        return new RedirectResponse($this->router->generate('home', ['id' => $this->usuario->getId()]));
    }

    protected function getLoginUrl()
    {
        return $this->router->generate('security_login');
    }

}