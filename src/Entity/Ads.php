<?php

namespace App\Entity;

use App\Repository\AdsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ads
 *
 */
#[ORM\Entity(repositoryClass: AdsRepository::class)]
#[ORM\Table(name: 'ads')]
class Ads
{
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private int $id;

    #[ORM\Column(name: 'status', type: 'integer', nullable: true)]

    private int $status;



    #[Assert\NotNull]
    #[ORM\Column(name: 'type', type: 'string', length: 255, nullable: false)]
    private string $type;
    #[Assert\NotNull]
    #[ORM\Column(name: 'nom', type: 'string', length: 255, nullable: false)]
    private string $nom;
    #[Assert\Image(
        minWidth: 200,
        maxWidth: 400,
        minHeight: 200,
        maxHeight: 400,
    )]
    #[Assert\NotNull]
    #[ORM\Column(name: 'photo', type: 'string', length: 250, nullable: true)]
    private ?string $photo = null;

    #[ORM\Column(name: 'video', type: 'string', length: 255, nullable: true)]
    private ?string $video = null;

    #[Assert\NotNull]
    #[Assert\Length(
        min: 7,
        max: 9,
    )]
    #[ORM\Column(name: 'date_debut', type: 'string', length: 250, nullable: true)]
    private string $dateDebut;

    #[Assert\NotNull]
    #[ORM\Column(name: 'date_fin', type: 'string', length: 255, nullable: false)]
    public string $dateFin;

    #[ORM\Column(name: 'nombre_ads', type: 'integer', nullable: false)]
    private int $nombreAds;
    #[Assert\NotNull]
    #[Assert\Email]
    #[ORM\Column(name: 'mail', type: 'string', length: 255, nullable: false)]
    private string $mail;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

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

    public function getDateDebut(): ?string
    {
        return $this->dateDebut;
    }

    public function setDateDebut(string $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * @return string
     */
    public function getDateFin(): string
    {
        return $this->dateFin;
    }

    /**
     * @param string $dateFin
     */
    public function setDateFin(string $dateFin): void
    {
        $this->dateFin = $dateFin;
    }



    public function getNombreAds(): ?int
    {
        return $this->nombreAds;
    }

    public function setNombreAds(int $nombreAds): self
    {
        $this->nombreAds = $nombreAds;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }
    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

}
