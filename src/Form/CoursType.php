<?php

namespace App\Form;

use App\Entity\Cours;
use ContainerFlHVtxg\getCategorieTypeService;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\File;


class CoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('matiere')
            ->add('domaine',ChoiceType::class, [
                'choices' => [
                    'Reseau  ' => 'Reseau',
                    'Informatique  ' => 'Informatique',
                    'Electronique  ' => 'Electronique',
                    'Mecanique  ' => 'Mecanique',
                ],
                'expanded' => true,])
            ->add('categorie', ChoiceType::class, array(
                    'choices' => array(
                    'Appliquée' => 'Appliquée',
                    'Fondamontale' => 'Fondamontale',
                ),
            ))
            ->add('chemin',FileType::class, [
                'label' => false,
                'mapped' => false, // Tell that there is no Entity to link
                'required' => true,])
            ->add('Valider',SubmitType::class);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cours::class,
        ]);
    }
}
