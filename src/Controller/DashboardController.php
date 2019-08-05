<?php


namespace App\Controller;

use App\Entity\Appusers;
use App\Entity\Deviceslocation;
use App\Entity\Devices;
use App\Entity\Usersdevices;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class DashboardController extends AbstractController
{
    /**
     * @Route ("/dashboard", name="dashboard_main");
     */

    public function load()
    {
        $activeUser = $this->getUser();


        return $this->render('admin/admin-main.html.twig', [

            'name' => $activeUser->getName(),
        ]);

    }

    /**
     * @Route ("/dashboard/devices");
     */

    public function showData()
    {
        $activeUser_id = $this->getUser()->getId();

        $devices = $this->getDoctrine()
            ->getRepository(Usersdevices::class)
            ->findBy(['user_id'=>$activeUser_id]);




        if (!$devices) {

            /*
            throw $this->createNotFoundException(
                'No records found '
            );*/
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

    private function getDevicesByUserId(int $id)
    {
        $devices = $this->getDoctrine()
                ->getRepository(Usersdevices::class)
                ->findByExampleField($id);
        return $devices;
    }

}