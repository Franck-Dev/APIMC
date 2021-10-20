<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\DatasPiecesRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=DatasPiecesRepository::class)
 * @UniqueEntity("Ref")
 */
class DatasPieces
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Ref;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Designation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $OldRef;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $CreatedAt;

    /**
     * @ORM\OneToMany(targetEntity=DatasResultsPolyms::class, mappedBy="Piece")
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

    public function getRef(): ?int
    {
        return $this->Ref;
    }

    public function setRef(int $Ref): self
    {
        $this->Ref = $Ref;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->Designation;
    }

    public function setDesignation(string $Designation): self
    {
        $this->Designation = $Designation;

        return $this;
    }

    public function getOldRef(): ?int
    {
        return $this->OldRef;
    }

    public function setOldRef(?int $OldRef): self
    {
        $this->OldRef = $OldRef;

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
            $datasResultsPolym->setPiece($this);
        }

        return $this;
    }

    public function removeDatasResultsPolym(DatasResultsPolyms $datasResultsPolym): self
    {
        if ($this->datasResultsPolyms->removeElement($datasResultsPolym)) {
            // set the owning side to null (unless already changed)
            if ($datasResultsPolym->getPiece() === $this) {
                $datasResultsPolym->setPiece(null);
            }
        }

        return $this;
    }
}
