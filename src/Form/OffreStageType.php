<?php

namespace App\Form;

use App\Entity\Offre;
use phpDocumentor\Reflection\Types\True_;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffreStageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('salaire')
            ->add('description')
            ->add('dateexpiration')
            ->add('typestage',
                ChoiceType::class,
                ['choices'=>[
                    'PFE'=>'PFE',
                    "Stage d'été"=>"Stage d'été",
                    'Alternance'=>'Alternance'
                ]])
            ->add('modetravail',ChoiceType::class,
                ['choices'=>[
                    'Présentiel'=>'Présentiel',
                    'Hybrid'=>'Hybrid',
                    'Teletravail'=>'Teletravail'
                ]

            ])
            ->add('lieu');

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offre::class,
        ]);
    }
}
