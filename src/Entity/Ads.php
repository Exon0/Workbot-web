<?php

namespace App\Entity;

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

    #[ORM\Column(name: 'type', type: 'string', length: 255, nullable: false)]
    private string $type;

    #[ORM\Column(name: 'nom', type: 'string', length: 255, nullable: false)]
    private string $nom;

    #[ORM\Column(name: 'photo', type: 'string', length: 250, nullable: true)]
    private ?string $photo = null;

    #[ORM\Column(name: 'video', type: 'string', length: 255, nullable: true)]
    private ?string $video = null;

    #[ORM\Column(name: 'date_debut', type: 'string', length: 250, nullable: false)]
    private string $dateDebut;

    #[ORM\Column(name: 'date_fin', type: 'string', length: 255, nullable: false)]
    private string $dateFin;

    #[ORM\Column(name: 'nombre_ads', type: 'integer', nullable: false)]
    private int $nombreAds;

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

    public function getDateFin(): ?string
    {
        return $this->dateFin;
    }

    public function setDateFin(string $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
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


}
