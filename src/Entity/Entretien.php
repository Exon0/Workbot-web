<?php

namespace App\Entity;

use App\Repository\EntretienRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Entretien
 *
 */
#[ORM\Entity(repositoryClass: EntretienRepository::class)]
#[ORM\Table(name: 'entretien')]
#[ORM\Index(columns: ['id_candidature'], name: 'id_candidature')]
class Entretien
{
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private int $id;

    #[ORM\Column(name: 'date', type: 'string', length: 55, nullable: false)]
    private string $date;

    #[ORM\Column(name: 'lienMeet', type: 'string', length: 350, nullable: false)]
    private string $lienmeet;

    #[ORM\Column(name: 'heure', type: 'integer', nullable: false)]
    private int $heure;

    #[ORM\JoinColumn(name: 'id_candidature', referencedColumnName: 'id')]
    private \App\Entity\Candidature $idCandidature;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getLienmeet(): ?string
    {
        return $this->lienmeet;
    }

    public function setLienmeet(string $lienmeet): self
    {
        $this->lienmeet = $lienmeet;

        return $this;
    }

    public function getHeure(): ?int
    {
        return $this->heure;
    }

    public function setHeure(int $heure): self
    {
        $this->heure = $heure;

        return $this;
    }


}
