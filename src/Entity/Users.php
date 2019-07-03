<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 */
class Users
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
    private $id_category;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_confidential;

    /**
     * @ORM\Column(type="string", length=128, nullable=false)
     */
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $confidential_accepted;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCategory(): ?int
    {
        return $this->id_category;
    }

    public function setIdCategory(?int $id_category): self
    {
        $this->id_category = $id_category;

        return $this;
    }

    public function getIdConfidential(): ?int
    {
        return $this->id_confidential;
    }

    public function setIdConfidential(?int $id_confidential): self
    {
        $this->id_confidential = $id_confidential;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(?string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getConfidentialAccepted(): ?bool
    {
        return $this->confidential_accepted;
    }

    public function setConfidentialAccepted(?bool $confidential_accepted): self
    {
        $this->confidential_accepted = $confidential_accepted;

        return $this;
    }
}
