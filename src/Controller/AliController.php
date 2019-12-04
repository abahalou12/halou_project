<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AliController extends AbstractController
{
    /**
     * @Route("/ali", name="ali")
     */
    public function index()
    {
        return $this->render('ali/index.html.twig', [
            'controller_name' => 'AliController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home (){
        return $this->render('ali/home.html.twig');
    }
}
