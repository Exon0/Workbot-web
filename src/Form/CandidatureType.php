<?php

namespace App\Form;

use App\Entity\Candidature;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CandidatureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('statut')
            ->add('lettremotivation')
            ->add('notetest')
            ->add('dateajout')
            ->add('cv')
            ->add('niveaufrancais')
            ->add('niveauanglais')
            ->add('diplome')
            ->add('dateexpiration')
            ->add('titre')
            ->add('typecondidature')
            ->add('experience')
            ->add('domaine')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Candidature::class,
        ]);
    }
}
