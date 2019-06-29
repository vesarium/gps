<?php

// src/Controller/HomepageController.php
namespace App\Controller;

use Michelf\MarkdownInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */

    public function number()
    {

        $number = random_int(0, 100);

        return $this->render('main.html.twig', [
            'number' => $number,
        ]);
    }

}