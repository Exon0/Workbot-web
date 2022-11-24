<?php

namespace App\Form;

use App\Entity\Evennement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class EvennementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('datedebut')
            ->add('datefin')
            ->add('libelle')
            ->add('heuredebut')
            ->add('heurefin')
            ->add('nbplaces')
            ->add('prix')
            ->add('flyer',FileType::class, array('data_class' => null))
            ->add('video',FileType::class, array('data_class' => null))
            ->add('Valider',SubmitType::class);


    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evennement::class,
        ]);
    }
}
