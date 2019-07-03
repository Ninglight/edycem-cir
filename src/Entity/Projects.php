<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjectsRepository")
 */
class Projects
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $name;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_category;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $actived;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $claimant;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $site;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $eligible_cir;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sous_type_activite;

    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $priority;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $chaire;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $end;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $goal;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $licence_document;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $patent_document;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
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

    public function getActived(): ?bool
    {
        return $this->actived;
    }

    public function setActived(?bool $actived): self
    {
        $this->actived = $actived;

        return $this;
    }

    public function getClaimant(): ?string
    {
        return $this->claimant;
    }

    public function setClaimant(?string $claimant): self
    {
        $this->claimant = $claimant;

        return $this;
    }

    public function getSite(): ?string
    {
        return $this->site;
    }

    public function setSite(?string $site): self
    {
        $this->site = $site;

        return $this;
    }

    public function getEligibleCir(): ?\DateTimeInterface
    {
        return $this->eligible_cir;
    }

    public function setEligibleCir(?\DateTimeInterface $eligible_cir): self
    {
        $this->eligible_cir = $eligible_cir;

        return $this;
    }

    public function getSousTypeActivite(): ?string
    {
        return $this->sous_type_activite;
    }

    public function setSousTypeActivite(?string $sous_type_activite): self
    {
        $this->sous_type_activite = $sous_type_activite;

        return $this;
    }

    public function getPriority(): ?string
    {
        return $this->priority;
    }

    public function setPriority(?string $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function getChaire(): ?bool
    {
        return $this->chaire;
    }

    public function setChaire(?bool $chaire): self
    {
        $this->chaire = $chaire;

        return $this;
    }

    public function getEnd(): ?\DateTimeInterface
    {
        return $this->end;
    }

    public function setEnd(?\DateTimeInterface $end): self
    {
        $this->end = $end;

        return $this;
    }

    public function getGoal(): ?string
    {
        return $this->goal;
    }

    public function setGoal(?string $goal): self
    {
        $this->goal = $goal;

        return $this;
    }

    public function getLicenceDocument(): ?bool
    {
        return $this->licence_document;
    }

    public function setLicenceDocument(?bool $licence_document): self
    {
        $this->licence_document = $licence_document;

        return $this;
    }

    public function getPatentDocument(): ?bool
    {
        return $this->patent_document;
    }

    public function setPatentDocument(?bool $patent_document): self
    {
        $this->patent_document = $patent_document;

        return $this;
    }
}
