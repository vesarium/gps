<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AuthController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     * @param AuthenticationUtils $authenticationUtils
     * @return Response
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        //$form = $this->createForm(User::class);


        return $this->render('admin/login.html.twig', [
            'last_username' => $lastUsername,
            'error'         => $error,

        ]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout() {
        throw new \Exception('Will be intercepted before getting here');
    }

    /**
     * @Route("/login_check", name="login_check")
     */
    public function login_check() {}
}

