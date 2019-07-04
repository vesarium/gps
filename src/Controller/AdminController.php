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
     * @Route ("/admin", name="admin_homepage");
     */

    public function load()
    {
        return $this->render('admin/admin-main', [ ]);
    }

    /**
     * @Route ("/admin/data-vis");
     */

    public function showData()
    {
        return $this->render('admin/data-visualisation', [ ]);
    }


}