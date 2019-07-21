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
     * @Route ("/dashboard/devices");
     */

    public function showData()
    {
        return $this->render('admin/devices.html.twig', [ ]);
    }

    /**
     * @Route ("/dashboard/maps");
     */

    public function showMaps()
    {
        return $this->render('admin/maps.html.twig', [ ]);
    }

    /**
     * @Route ("/dashboard/preferences");
     */

    public function showPreferences()
    {
        return $this->render('admin/preferences.html.twig', [ ]);
    }

    /**
     * @Route ("/dashboard/login");
     */

    public function Logout()
    {
        return $this->render('admin/login.html.twig', [ ]);
    }


}