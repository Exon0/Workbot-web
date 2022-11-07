<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participation
 *
 */
#[ORM\Entity(repositoryClass: ParticipationRepository::class)]
#[ORM\Table(name: 'participation')]
#[ORM\Index(columns: ['id_event'], name: 'id_event')]
#[ORM\Index(columns: ['id_userP'], name: 'id_userP')]
class Participation
{
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private int $id;

    #[ORM\JoinColumn(name: 'id_event', referencedColumnName: 'id')]
    private \App\Entity\Evennement $idEvent;

    #[ORM\JoinColumn(name: 'id_userP', referencedColumnName: 'id')]
    private \App\Entity\Utilisateur $idUserp;

    public function getId(): ?int
    {
        return $this->id;
    }


}
