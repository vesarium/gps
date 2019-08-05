<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersdevicesRepository")
 */
class Usersdevices
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
    private $user_id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $device_id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $device_title;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?string
    {
        return $this->user_id;
    }

    public function setUserId(string $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getDeviceId(): ?string
    {
        return $this->device_id;
    }

    public function setDeviceId(string $device_id): self
    {
        $this->device_id = $device_id;

        return $this;
    }

    public function getDeviceTitle(): ?string
    {
        return $this->device_title;
    }

    public function setDeviceTitle(string $device_title): self
    {
        $this->device_title = $device_title;

        return $this;
    }



}
