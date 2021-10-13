<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DatasPolymsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=DatasPolymsRepository::class)
 */
class DatasPolyms
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=11)
     */
    private $Recette;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $Moyen;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $Prog;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateDeb;

    /**
     * @ORM\Column(type="time")
     */
    private $Duree;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $CreatedAt;

    /**
     * @ORM\OneToMany(targetEntity=DatasResultsPolyms::class, mappedBy="NumPolym")
     */
    private $datasResultsPolyms;

    public function __construct()
    {
        $this->datasResultsPolyms = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getRecette(): ?string
    {
        return $this->Recette;
    }

    public function setRecette(string $Recette): self
    {
        $this->Recette = $Recette;

        return $this;
    }

    public function getMoyen(): ?string
    {
        return $this->Moyen;
    }

    public function setMoyen(string $Moyen): self
    {
        $this->Moyen = $Moyen;

        return $this;
    }

    public function getProg(): ?string
    {
        return $this->Prog;
    }

    public function setProg(string $Prog): self
    {
        $this->Prog = $Prog;

        return $this;
    }

    public function getDateDeb(): ?\DateTimeInterface
    {
        return $this->DateDeb;
    }

    public function setDateDeb(\DateTimeInterface $DateDeb): self
    {
        $this->DateDeb = $DateDeb;

        return $this;
    }

    public function getDuree(): ?\DateTimeInterface
    {
        return $this->Duree;
    }

    public function setDuree(\DateTimeInterface $Duree): self
    {
        $this->Duree = $Duree;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->CreatedAt;
    }

    public function setCreatedAt(\DateTimeImmutable $CreatedAt): self
    {
        $this->CreatedAt = $CreatedAt;

        return $this;
    }

    /**
     * @return Collection|DatasResultsPolyms[]
     */
    public function getDatasResultsPolyms(): Collection
    {
        return $this->datasResultsPolyms;
    }

    public function addDatasResultsPolym(DatasResultsPolyms $datasResultsPolym): self
    {
        if (!$this->datasResultsPolyms->contains($datasResultsPolym)) {
            $this->datasResultsPolyms[] = $datasResultsPolym;
            $datasResultsPolym->setNumPolym($this);
        }

        return $this;
    }

    public function removeDatasResultsPolym(DatasResultsPolyms $datasResultsPolym): self
    {
        if ($this->datasResultsPolyms->removeElement($datasResultsPolym)) {
            // set the owning side to null (unless already changed)
            if ($datasResultsPolym->getNumPolym() === $this) {
                $datasResultsPolym->setNumPolym(null);
            }
        }

        return $this;
    }
}
