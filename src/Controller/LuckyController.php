<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
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
       return $this->render('article/homepage.html.twig');
    }

    /**
     * @Route("/news/{slug}", name="article_show")
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
            'slug' => $slug,
        ]);
    }

    /**
     * @Route("news/{slug}/heart", name="article_toggle_heart", methods={"POST"})
     */

    public function toggleArticleHeart($slug)
    {
        return new JsonResponse(['hearts' => rand(5, 100)]);

    }
}
