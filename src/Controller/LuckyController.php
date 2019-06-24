<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class LuckyController extends Controller
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function number()
    {
        $number = mt_rand(0, 100);

        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        $comments = [
            'comment 1111comment 1111comment 1111comment 1111comment 1111',
            'Now would this be apple wood smoked bacon? Or traditional bacon - IMHO it makes a difference.',
            'comment 333 333 3333',
        ];

        //dump($slug, $this);

        return $this->render('article/show.html.twig', [
           'title' => ucwords(str_replace('-',' ', $slug)),
            'comments' => $comments,
        ]);
    }
}
