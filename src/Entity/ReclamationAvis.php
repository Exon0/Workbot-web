<?php

namespace App\Entity;

use App\Repository\ReclamationAvisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * ReclamationAvis
 *
 */
#[ORM\Entity(repositoryClass: ReclamationAvisRepository::class)]
#[ORM\Table(name: 'reclamation_avis')]
#[ORM\Index(columns: ['id_societe'], name: 'id_societe')]
#[ORM\Index(columns: ['id_event'], name: 'id_event')]
#[ORM\Index(columns: ['id_offre'], name: 'id_offre')]
#[ORM\Index(columns: ['id_user'], name: 'id_user')]
#[ORM\Index(columns: ['id_categorie'], name: 'id_categorie')]
class ReclamationAvis
{
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private int $id;

    #[ORM\Column(name: 'objet', type: 'string', length: 255, nullable: true)]
    private ?string $objet = null;

    #[ORM\Column(name: 'dateAjout', type: 'date', nullable: false, options: ['default' => 'CURRENT_TIMESTAMP'])]
    private string|\DateTime $dateajout = 'CURRENT_TIMESTAMP';

    #[ORM\Column(name: 'description', type: 'string', length: 250, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(name: 'image', type: 'string', length: 300, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(name: 'note', type: 'string', length: 11, nullable: true)]
    private ?string $note = null;

    #[ORM\JoinColumn(name: 'id_categorie', referencedColumnName: 'id')]
    private \App\Entity\Categorie $idCategorie;

    #[ORM\JoinColumn(name: 'id_user', referencedColumnName: 'id')]
    private \App\Entity\Utilisateur $idUser;

    #[ORM\JoinColumn(name: 'id_event', referencedColumnName: 'id')]
    private \App\Entity\Evennement $idEvent;

    #[ORM\JoinColumn(name: 'id_societe', referencedColumnName: 'id')]
    private \App\Entity\Utilisateur $idSociete;

    #[ORM\JoinColumn(name: 'id_offre', referencedColumnName: 'id')]
    private \App\Entity\Offre $idOffre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(?string $objet): self
    {
        $this->objet = $objet;

        return $this;
    }

    public function getDateajout(): ?\DateTimeInterface
    {
        return $this->dateajout;
    }

    public function setDateajout(\DateTimeInterface $dateajout): self
    {
        $this->dateajout = $dateajout;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }


}
