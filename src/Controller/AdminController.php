<?php


namespace App\Controller;

use Psr\Container\ContainerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route ("/dashboard", name="dashboard_main");
     */

    public function load()
    {
        return $this->render('admin/admin-main.html.twig', [ ]);
    }

    /**
     * @Route ("/admin/data-vis");
     */

    public function showData()
    {
        return $this->render('admin/data-visualisation.html.twig', [ ]);
    }


}