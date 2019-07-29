<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DeviceslocationRepository")
 */
class Deviceslocation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $device_id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $latitude;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $longitude;

    public function getDeviceId(): ?int
    {
        return $this->device_id;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }




}
