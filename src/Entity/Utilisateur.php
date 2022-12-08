<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Utilisateur
 *
 * @method string getUserIdentifier()
 */
#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
#[ORM\Table(name: 'utilisateur')]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
 class Utilisateur implements UserInterface,PasswordAuthenticatedUserInterface
{
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    #[ORM\OneToMany(targetEntity: 'Reclamation')]
    private int $id;

    #[ORM\Column(name: 'nom', type: 'string', length: 25, nullable: true)]
    #[Assert\NotNull]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: 'Your first name must be at least {{ limit }} characters long',
        maxMessage: 'Your first name cannot be longer than {{ limit }} characters',
    )]
    private ?string $nom = null;

    #[ORM\Column(name: 'prenom', type: 'string', length: 25, nullable: true)]
    #[Assert\NotNull]
    private ?string $prenom = null;


    #[ORM\Column(name: 'tel', type: 'string', length: 30, nullable: true)]
    private ?string $tel = null;

    #[ORM\Column(name: 'email', type: 'string', length: 200, nullable: true)]
    private ?string $email = null;
    #[Assert\NotNull]
    #[ORM\Column(name: 'mdp', type: 'string', length: 355, nullable: true)]
    private ?string $mdp = null;
    #[ORM\Column(name: 'adresse', type: 'string', length: 30, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(name: 'photo', type: 'string', length: 300, nullable: true)]
    private ?string $photo = null;

    #[ORM\Column(name: 'questionSecu', type: 'string', length: 300, nullable: true)]
    private ?string $questionsecu = null;

    #[ORM\Column(name: 'reponseSecu', type: 'string', length: 300, nullable: true)]
    private ?string $reponsesecu = null;

    #[ORM\Column(name: 'methode', type: 'string', length: 200, nullable: true)]
    private ?string $methode = null;

    #[ORM\Column(name: 'formeJuridique', type: 'string', length: 300, nullable: true)]
    private ?string $formejuridique = null;

    #[ORM\Column(name: 'raisonSociale', type: 'string', length: 300, nullable: true)]
    private ?string $raisonsociale = null;

    #[ORM\Column(name: 'domaine', type: 'string', length: 300, nullable: true)]
    private ?string $domaine = null;

    #[ORM\Column(name: 'pattente', type: 'string', length: 300, nullable: true)]
    private ?string $pattente = null;

    #[ORM\Column(name: 'nomSociete', type: 'string', length: 300, nullable: true)]
    private ?string $nomsociete = null;

    #[ORM\Column(name: 'diplome', type: 'string', length: 300, nullable: true)]
    private ?string $diplome = null;

    #[ORM\Column(name: 'experience', type: 'string', length: 250, nullable: true)]
    private ?string $experience = null;

    #[ORM\Column(name: 'niveauFr', type: 'string', length: 20, nullable: true)]
    private ?string $niveaufr = null;

    #[ORM\Column(name: 'niveauAng', type: 'string', length: 20, nullable: true)]
    private ?string $niveauang = null;

    #[ORM\Column(name: 'competance', type: 'string', length: 250, nullable: true)]
    private ?string $competance = null;

    #[ORM\Column(name: 'cv', type: 'string', length: 350, nullable: true)]
    private ?string $cv = null;

    #[ORM\Column(name: 'portfolio', type: 'string', length: 350, nullable: true)]
    private ?string $portfolio = null;

    #[ORM\Column(name: 'bio', type: 'string', length: 500, nullable: true)]
    private ?string $bio = null;

    #[ORM\Column(name: 'typeCandidat', type: 'string', length: 50, nullable: true)]
    private ?string $typecandidat = null;

    #[ORM\Column(name: 'note', type: 'string', length: 255, nullable: true)]
    private ?string $note = null;

    #[ORM\Column(name: 'role', type: 'string', length: 25, nullable: false)]
    private string $role;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(?string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

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

    public function getQuestionsecu(): ?string
    {
        return $this->questionsecu;
    }

    public function setQuestionsecu(?string $questionsecu): self
    {
        $this->questionsecu = $questionsecu;

        return $this;
    }

    public function getReponsesecu(): ?string
    {
        return $this->reponsesecu;
    }

    public function setReponsesecu(?string $reponsesecu): self
    {
        $this->reponsesecu = $reponsesecu;

        return $this;
    }

    public function getMethode(): ?string
    {
        return $this->methode;
    }

    public function setMethode(?string $methode): self
    {
        $this->methode = $methode;

        return $this;
    }

    public function getFormejuridique(): ?string
    {
        return $this->formejuridique;
    }

    public function setFormejuridique(?string $formejuridique): self
    {
        $this->formejuridique = $formejuridique;

        return $this;
    }

    public function getRaisonsociale(): ?string
    {
        return $this->raisonsociale;
    }

    public function setRaisonsociale(?string $raisonsociale): self
    {
        $this->raisonsociale = $raisonsociale;

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

    public function getPattente(): ?string
    {
        return $this->pattente;
    }

    public function setPattente(?string $pattente): self
    {
        $this->pattente = $pattente;

        return $this;
    }

    public function getNomsociete(): ?string
    {
        return $this->nomsociete;
    }

    public function setNomsociete(?string $nomsociete): self
    {
        $this->nomsociete = $nomsociete;

        return $this;
    }

    public function getDiplome(): ?string
    {
        return $this->diplome;
    }

    public function setDiplome(?string $diplome): self
    {
        $this->diplome = $diplome;

        return $this;
    }

    public function getExperience(): ?string
    {
        return $this->experience;
    }

    public function setExperience(?string $experience): self
    {
        $this->experience = $experience;

        return $this;
    }

    public function getNiveaufr(): ?string
    {
        return $this->niveaufr;
    }

    public function setNiveaufr(?string $niveaufr): self
    {
        $this->niveaufr = $niveaufr;

        return $this;
    }

    public function getNiveauang(): ?string
    {
        return $this->niveauang;
    }

    public function setNiveauang(?string $niveauang): self
    {
        $this->niveauang = $niveauang;

        return $this;
    }

    public function getCompetance(): ?string
    {
        return $this->competance;
    }

    public function setCompetance(?string $competance): self
    {
        $this->competance = $competance;

        return $this;
    }

    public function getCv(): ?string
    {
        return $this->cv;
    }

    public function setCv(?string $cv): self
    {
        $this->cv = $cv;

        return $this;
    }

    public function getPortfolio(): ?string
    {
        return $this->portfolio;
    }

    public function setPortfolio(?string $portfolio): self
    {
        $this->portfolio = $portfolio;

        return $this;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(?string $bio): self
    {
        $this->bio = $bio;

        return $this;
    }

    public function getTypecandidat(): ?string
    {
        return $this->typecandidat;
    }

    public function setTypecandidat(?string $typecandidat): self
    {
        $this->typecandidat = $typecandidat;

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

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }


    public function __call(string $name, array $arguments)
    {
        // TODO: Implement @method string getUserIdentifier()
    }

    public function getRoles()
    {
        // TODO: Implement getRoles() method.
    }

    public function getPassword(): string
    {

    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function getUsername()
    {
        // TODO: Implement getUsername() method.
    }
}
