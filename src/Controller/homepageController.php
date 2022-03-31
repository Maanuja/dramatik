<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class homepageController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('homepage.html.twig');
    }

    /**
     * @Route("/apropos")
     */
    public function apropos(): Response
    {
        return $this->render('apropos.html.twig');
    }

    /**
     * @Route("/login")
     */
    public function login(): Response
    {
        return $this->render('account/session.html.twig');
    }
    /**
     * @Route("/register")
     */
    public function signup(): Response
    {
        return $this->render('account/session.html.twig');
    }
    /**
     * @Route("/search")
     */
    public function search(): Response
    {
        return $this->render('search.html.twig');
    }
}