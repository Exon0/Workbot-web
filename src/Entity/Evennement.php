<?php

namespace App\Entity;

use App\Repository\EvennementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Evennement
 *
 */
#[ORM\Entity(repositoryClass: EvennementRepository::class)]
#[ORM\Table(name: 'evennement')]
#[ORM\Index(columns: ['id_user'], name: 'id_user')]
class Evennement
{
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private int $id;

    #[ORM\Column(name: 'dateDebut', type: 'string', length: 25, nullable: false)]
    private string $datedebut;

    #[ORM\Column(name: 'dateFin', type: 'string', length: 25, nullable: false)]
    private string $datefin;

    #[ORM\Column(name: 'libelle', type: 'string', length: 50, nullable: false)]
    private string $libelle;

    #[ORM\Column(name: 'heureDebut', type: 'string', length: 30, nullable: false)]
    private string $heuredebut;

    #[ORM\Column(name: 'heureFin', type: 'string', length: 30, nullable: false)]
    private string $heurefin;

    #[ORM\Column(name: 'nbPlaces', type: 'integer', nullable: false)]
    private int $nbplaces;

    #[ORM\Column(name: 'prix', type: 'string', length: 20, nullable: true)]
    private ?string $prix = null;

    #[ORM\Column(name: 'flyer', type: 'string', length: 300, nullable: true)]
    private ?string $flyer = null;

    #[ORM\Column(name: 'video', type: 'string', length: 300, nullable: true)]
    private ?string $video = null;

    #[ORM\JoinColumn(name: 'id_user', referencedColumnName: 'id')]
    #[ORM\ManyToOne(targetEntity: 'Utilisateur')]
    private \App\Entity\Utilisateur $idUser;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatedebut(): ?string
    {
        return $this->datedebut;
    }

    public function setDatedebut(string $datedebut): self
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getDatefin(): ?string
    {
        return $this->datefin;
    }

    public function setDatefin(string $datefin): self
    {
        $this->datefin = $datefin;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getHeuredebut(): ?string
    {
        return $this->heuredebut;
    }

    public function setHeuredebut(string $heuredebut): self
    {
        $this->heuredebut = $heuredebut;

        return $this;
    }

    public function getHeurefin(): ?string
    {
        return $this->heurefin;
    }

    public function setHeurefin(string $heurefin): self
    {
        $this->heurefin = $heurefin;

        return $this;
    }

    public function getNbplaces(): ?int
    {
        return $this->nbplaces;
    }

    public function setNbplaces(int $nbplaces): self
    {
        $this->nbplaces = $nbplaces;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(?string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getFlyer(): ?string
    {
        return $this->flyer;
    }

    public function setFlyer(?string $flyer): self
    {
        $this->flyer = $flyer;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(?string $video): self
    {
        $this->video = $video;

        return $this;
    }


}
