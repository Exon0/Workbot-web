<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
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

    #[Assert\NotBlank]
    #[Assert\Date]
    #[ORM\Column(name: 'date', type: 'string', length: 55, nullable: false)]
    private string $date;

    #[Assert\NotBlank]
    #[Assert\Url]
    #[ORM\Column(name: 'lienMeet', type: 'string', length: 350, nullable: false)]
    private string $lienmeet;


    #[Assert\Time]
    #[ORM\Column(name: 'heure', nullable: false)]
    private String $heure;

    #[ORM\JoinColumn(name: 'id_candidature', referencedColumnName: 'id')]
    #[ORM\ManyToOne(targetEntity: 'Candidature')]
    private \App\Entity\Candidature $idCandidature;


    #[ORM\JoinColumn(name: 'iduser', referencedColumnName: 'id')]
    #[ORM\ManyToOne(targetEntity: 'Utilisateur')]
    private \App\Entity\Utilisateur $iduser;

    /**
     * @return Utilisateur
     */
    public function getIduser(): Utilisateur
    {
        return $this->iduser;
    }

    /**
     * @param Utilisateur $iduser
     */
    public function setIduser(Utilisateur $iduser): void
    {
        $this->iduser = $iduser;
    }


    /**
     * @return Candidature
     */
    public function getIdCandidature(): Candidature
    {
        return $this->idCandidature;
    }

    /**
     * @param Candidature $idCandidature
     */
    public function setIdCandidature(Candidature $idCandidature): void
    {
        $this->idCandidature = $idCandidature;
    }

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

    public function getHeure(): ?String
    {
        return $this->heure;
    }

    public function setHeure(String $heure): self
    {
        $this->heure = $heure;

        return $this;
    }


}
