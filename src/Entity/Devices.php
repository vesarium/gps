<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DevicesRepository")
 */
class Devices
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
    private $device_details;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDeviceId(): ?string
    {
        return $this->device_id;
    }

    public function setDeviceId(?string $device_id): self
    {
        $this->device_id = $device_id;

        return $this;
    }

    public function getDeviceDetails(): ?string
    {
        return $this->device_details;
    }

    public function setDeviceDetails(?string $devicedetails): self
    {
        $this->device_details = $devicedetails;

        return $this;
    }
}
