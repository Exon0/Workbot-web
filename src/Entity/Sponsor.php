<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sponsor
 *
 */
#[ORM\Entity(repositoryClass: SponsorRepository::class)]
#[ORM\Table(name: 'sponsor')]
#[ORM\Index(columns: ['id_evenement'], name: 'id_evenement')]
class Sponsor
{
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private int $id;

    #[ORM\Column(name: 'nom', type: 'string', length: 30, nullable: false)]
    private string $nom;

    #[ORM\Column(name: 'logo', type: 'string', length: 100, nullable: false)]
    private string $logo;

    #[ORM\JoinColumn(name: 'id_evenement', referencedColumnName: 'id')]
    private \App\Entity\Evennement $idEvenement;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }


}
