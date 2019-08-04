<?php


namespace App\Controller;

use App\Entity\Devices;
use App\Entity\Deviceslocation;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route ("/dashboard", name="dashboard_main");
     */

    public function load()
    {
        $user = $this->getUser();
        return $this->render('admin/admin-main.html.twig', [
            'name' => $user->getname(),
        ]);

    }

    /**
     * @Route ("/dashboard/devices");
     */

    public function showData()
    {
        $devices = $this->getDoctrine()
            ->getRepository(Deviceslocation::class)
            ->findAll();
        if (!$devices) {
            throw $this->createNotFoundException(
                'No records found '
            );
        }
        return $this->render('admin/devices.html.twig', [
            'devices' => $devices,
        ]);


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