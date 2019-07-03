<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EstimationsRepository")
 */
class Estimations
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_project;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_task;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $hour;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdProject(): ?int
    {
        return $this->id_project;
    }

    public function setIdProject(?int $id_project): self
    {
        $this->id_project = $id_project;

        return $this;
    }

    public function getIdTask(): ?int
    {
        return $this->id_task;
    }

    public function setIdTask(?int $id_task): self
    {
        $this->id_task = $id_task;

        return $this;
    }

    public function getHour(): ?\DateTimeInterface
    {
        return $this->hour;
    }

    public function setHour(?\DateTimeInterface $hour): self
    {
        $this->hour = $hour;

        return $this;
    }
}
