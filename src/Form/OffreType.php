<?php

namespace App\Form;

use App\Entity\Offre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('salaire')
            ->add('description')
            ->add('domaine')
            ->add('dateexpiration')
            ->add('dureestage')
            ->add('typestage')
            ->add('dureecontrat')
            ->add('typecontrat')
            ->add('anneeexperience')
            ->add('modetravail')
            ->add('lieu')
            ->add('typeoffre')
            ->add('dateajout')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offre::class,
        ]);
    }
}
