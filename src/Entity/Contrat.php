<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\ContratRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 */
#[ORM\Entity(repositoryClass: ContratRepository::class)]
#[ORM\Table(name: 'contrat')]
#[ORM\Index(columns: ['id_candidature'], name: 'id_candidature')]
class Contrat
{
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private int $id;
    #[ORM\Column(name: 'typeContrat', type: 'string', length: 100, nullable: true)]
    #[Assert\NotNull]
    private ?string $typecontrat = null;

    #[ORM\Column(name: 'dateDebut', type: 'date', nullable: true)]
    #[Assert\NotNull]
    private ?\DateTime $datedebut = null;

    #[ORM\Column(name: 'salaire', type: 'float', length: 15, nullable: true)]
    #[Assert\Positive]
    #[Assert\NotNull]
    private ?float $salaire = null;

    #[ORM\Column(name: 'dateFin', type: 'date', nullable: true)]

    private ?\DateTime $datefin = null;

    #[ORM\Column(name: 'lien', type: 'string', length: 300, nullable: true)]
    #[Assert\NotNull]
    #[Assert\Email(
        message: 'The email {{ value }} is not a valid email.',
    )]
    private ?string $lien = null;

    #[ORM\Column(name: 'id_candidature', type: 'integer', nullable: true)]
    private ?int $idCandidature = null;
    #[Assert\Date]
    #[ORM\Column(name: 'dateCreation', type: 'string', nullable: true)]

    private ?string $datecreation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypecontrat(): ?string
    {
        return $this->typecontrat;
    }

    public function setTypecontrat(?string $typecontrat): self
    {
        $this->typecontrat = $typecontrat;

        return $this;
    }

    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }

    public function setDatedebut(?\DateTimeInterface $datedebut): self
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getSalaire(): ?float
    {
        return $this->salaire;
    }

    public function setSalaire(?float $salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function getDatefin(): ?\DateTimeInterface
    {
        return $this->datefin;
    }

    public function setDatefin(?\DateTimeInterface $datefin): self
    {
        $this->datefin = $datefin;

        return $this;
    }

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(?string $lien): self
    {
        $this->lien = $lien;

        return $this;
    }

    public function getIdCandidature(): ?int
    {
        return $this->idCandidature;
    }

    public function setIdCandidature(?int $idCandidature): self
    {
        $this->idCandidature = $idCandidature;

        return $this;
    }

    public function getDatecreation(): ?string
    {
        return $this->datecreation;
    }

    public function setDatecreation(?string $datecreation): self
    {
        $this->datecreation = $datecreation;

        return $this;
    }








}
