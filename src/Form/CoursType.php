<?php

namespace App\Form;

use App\Entity\Cours;
use ContainerFlHVtxg\getCategorieTypeService;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class CoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('matiere')
            ->add('domaine')
            ->add('categorie', ChoiceType::class, array(
                    'choices' => array(
                    'Appliquée' => 'Appliquée',
                    'Fondamontale' => 'Fondamontale',
                ),
            ))
            ->add('chemin')
        ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cours::class,
        ]);
    }
}
