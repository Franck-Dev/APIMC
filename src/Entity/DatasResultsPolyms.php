<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DatasResultsPolymsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=DatasResultsPolymsRepository::class)
 */
class DatasResultsPolyms
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=DatasPolyms::class, inversedBy="datasResultsPolyms")
     * @ORM\JoinColumn(nullable=false)
     */
    private $NumPolym;

    /**
     * @ORM\ManyToOne(targetEntity=DatasPieces::class, inversedBy="datasResultsPolyms")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Piece;

    /**
     * @ORM\Column(type="integer")
     */
    private $Vit1min;

    /**
     * @ORM\Column(type="integer")
     */
    private $Vit1max;

    /**
     * @ORM\Column(type="integer")
     */
    private $Temp1max;

    /**
     * @ORM\Column(type="integer")
     */
    private $DureePal1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Vit2min;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Vit2max;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Temp2max;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $DureePal2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Vit3min;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Vit3max;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Temp3max;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $DureePal3;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Vide1min;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Vide1max;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Vide2min;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Vide2max;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Press1min;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Press1max;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Press2min;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Press2max;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Press3min;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Press3max;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $TempPressIn;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $TempPressOut;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $TempVideOut;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $VideTempalFin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumPolym(): ?DatasPolyms
    {
        return $this->NumPolym;
    }

    public function setNumPolym(?DatasPolyms $NumPolym): self
    {
        $this->NumPolym = $NumPolym;

        return $this;
    }

    public function getPiece(): ?DatasPieces
    {
        return $this->Piece;
    }

    public function setPiece(?DatasPieces $Piece): self
    {
        $this->Piece = $Piece;

        return $this;
    }

    public function getVit1min(): ?int
    {
        return $this->Vit1min;
    }

    public function setVit1min(int $Vit1min): self
    {
        $this->Vit1min = $Vit1min;

        return $this;
    }

    public function getVit1max(): ?int
    {
        return $this->Vit1max;
    }

    public function setVit1max(int $Vit1max): self
    {
        $this->Vit1max = $Vit1max;

        return $this;
    }

    public function getTemp1max(): ?int
    {
        return $this->Temp1max;
    }

    public function setTemp1max(int $Temp1max): self
    {
        $this->Temp1max = $Temp1max;

        return $this;
    }

    public function getDureePal1(): ?int
    {
        return $this->DureePal1;
    }

    public function setDureePal1(int $DureePal1): self
    {
        $this->DureePal1 = $DureePal1;

        return $this;
    }

    public function getVit2min(): ?int
    {
        return $this->Vit2min;
    }

    public function setVit2min(?int $Vit2min): self
    {
        $this->Vit2min = $Vit2min;

        return $this;
    }

    public function getVit2max(): ?int
    {
        return $this->Vit2max;
    }

    public function setVit2max(?int $Vit2max): self
    {
        $this->Vit2max = $Vit2max;

        return $this;
    }

    public function getTemp2max(): ?int
    {
        return $this->Temp2max;
    }

    public function setTemp2max(?int $Temp2max): self
    {
        $this->Temp2max = $Temp2max;

        return $this;
    }

    public function getDureePal2(): ?int
    {
        return $this->DureePal2;
    }

    public function setDureePal2(?int $DureePal2): self
    {
        $this->DureePal2 = $DureePal2;

        return $this;
    }

    public function getVit3min(): ?int
    {
        return $this->Vit3min;
    }

    public function setVit3min(?int $Vit3min): self
    {
        $this->Vit3min = $Vit3min;

        return $this;
    }

    public function getVit3max(): ?int
    {
        return $this->Vit3max;
    }

    public function setVit3max(?int $Vit3max): self
    {
        $this->Vit3max = $Vit3max;

        return $this;
    }

    public function getTemp3max(): ?int
    {
        return $this->Temp3max;
    }

    public function setTemp3max(?int $Temp3max): self
    {
        $this->Temp3max = $Temp3max;

        return $this;
    }

    public function getDureePal3(): ?int
    {
        return $this->DureePal3;
    }

    public function setDureePal3(?int $DureePal3): self
    {
        $this->DureePal3 = $DureePal3;

        return $this;
    }

    public function getVide1min(): ?int
    {
        return $this->Vide1min;
    }

    public function setVide1min(?int $Vide1min): self
    {
        $this->Vide1min = $Vide1min;

        return $this;
    }

    public function getVide1max(): ?int
    {
        return $this->Vide1max;
    }

    public function setVide1max(?int $Vide1max): self
    {
        $this->Vide1max = $Vide1max;

        return $this;
    }

    public function getVide2min(): ?int
    {
        return $this->Vide2min;
    }

    public function setVide2min(?int $Vide2min): self
    {
        $this->Vide2min = $Vide2min;

        return $this;
    }

    public function getVide2max(): ?int
    {
        return $this->Vide2max;
    }

    public function setVide2max(?int $Vide2max): self
    {
        $this->Vide2max = $Vide2max;

        return $this;
    }

    public function getPress1min(): ?int
    {
        return $this->Press1min;
    }

    public function setPress1min(?int $Press1min): self
    {
        $this->Press1min = $Press1min;

        return $this;
    }

    public function getPress1max(): ?int
    {
        return $this->Press1max;
    }

    public function setPress1max(?int $Press1max): self
    {
        $this->Press1max = $Press1max;

        return $this;
    }

    public function getPress2min(): ?int
    {
        return $this->Press2min;
    }

    public function setPress2min(?int $Press2min): self
    {
        $this->Press2min = $Press2min;

        return $this;
    }

    public function getPress2max(): ?int
    {
        return $this->Press2max;
    }

    public function setPress2max(?int $Press2max): self
    {
        $this->Press2max = $Press2max;

        return $this;
    }

    public function getPress3min(): ?int
    {
        return $this->Press3min;
    }

    public function setPress3min(?int $Press3min): self
    {
        $this->Press3min = $Press3min;

        return $this;
    }

    public function getPress3max(): ?int
    {
        return $this->Press3max;
    }

    public function setPress3max(?int $Press3max): self
    {
        $this->Press3max = $Press3max;

        return $this;
    }

    public function getTempPressIn(): ?int
    {
        return $this->TempPressIn;
    }

    public function setTempPressIn(?int $TempPressIn): self
    {
        $this->TempPressIn = $TempPressIn;

        return $this;
    }

    public function getTempPressOut(): ?int
    {
        return $this->TempPressOut;
    }

    public function setTempPressOut(?int $TempPressOut): self
    {
        $this->TempPressOut = $TempPressOut;

        return $this;
    }

    public function getTempVideOut(): ?int
    {
        return $this->TempVideOut;
    }

    public function setTempVideOut(?int $TempVideOut): self
    {
        $this->TempVideOut = $TempVideOut;

        return $this;
    }

    public function getVideTempalFin(): ?int
    {
        return $this->VideTempalFin;
    }

    public function setVideTempalFin(?int $VideTempalFin): self
    {
        $this->VideTempalFin = $VideTempalFin;

        return $this;
    }
}
