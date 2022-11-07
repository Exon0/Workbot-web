<?php

namespace App\Entity;

use App\Repository\TestRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 */
#[ORM\Entity(repositoryClass: TestRepository::class)]
#[ORM\Table(name: 'test')]
#[ORM\Index(columns: ['id_soc'], name: 'id_soc')]
class Test
{
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private int $id;

    #[ORM\Column(name: 'titre', type: 'string', length: 300, nullable: false)]
    private string $titre;

    #[ORM\Column(name: 'domaine', type: 'string', length: 50, nullable: true)]
    private ?string $domaine = null;

    #[ORM\Column(name: 'description', type: 'string', length: 350, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(name: 'lien', type: 'string', length: 350, nullable: false)]
    private string $lien;

    #[ORM\Column(name: 'categorie', type: 'string', length: 100, nullable: true)]
    private ?string $categorie = null;

    #[ORM\JoinColumn(name: 'id_soc', referencedColumnName: 'id')]
    private \App\Entity\Utilisateur $idSoc;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDomaine(): ?string
    {
        return $this->domaine;
    }

    public function setDomaine(?string $domaine): self
    {
        $this->domaine = $domaine;

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

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(string $lien): self
    {
        $this->lien = $lien;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(?string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }


}
