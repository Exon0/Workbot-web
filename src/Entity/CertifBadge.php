<?php

namespace App\Entity;

use App\Repository\CertifBadgeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * CertifBadge
 *
 */
#[ORM\Entity(repositoryClass: CertifBadgeRepository::class)]
#[ORM\Table(name: 'certif_badge')]
#[ORM\Index(columns: ['id_user'], name: 'fk_user')]
#[ORM\Index(columns: ['id_badge'], name: 'fb_badge')]
#[ORM\Index(columns: ['id_certif'], name: 'fk_certif')]
class CertifBadge
{
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private int $id;

    #[ORM\JoinColumn(name: 'id_certif', referencedColumnName: 'id')]
    private \App\Entity\Certification $idCertif;

    #[ORM\JoinColumn(name: 'id_user', referencedColumnName: 'id')]
    private \App\Entity\Utilisateur $idUser;

    #[ORM\JoinColumn(name: 'id_badge', referencedColumnName: 'id')]
    private \App\Entity\Badge $idBadge;

    public function getId(): ?int
    {
        return $this->id;
    }


}
