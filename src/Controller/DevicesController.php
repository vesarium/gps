<?php

namespace App\Controller;

use App\Entity\Devices;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DevicesController extends AbstractController
{
    /**
     * @Route("/devices", name="devices")
     */
    public function index()
    {
        $devices = $this->getDoctrine()
            ->getRepository(Devices::class)
            ->findAll();
        if (!$devices) {
            throw $this->createNotFoundException(
                'No product found '
            );
        }
        return new Response($devices[1]->getDeviceName());

    }

    /**
     * @Route("/devices/add", name="add_device")
     */
    public function addDevice(): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $product = new Devices();
        $product->setDeviceName('Dolly2');
        $product->setDescription('Ergonomic and stylish!');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$product->getId());
    }
}
