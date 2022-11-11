<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email',EmailType::class)
            ->add('nom',TextType::class)
            ->add('prenom',TextType::class)
            ->add('role', ChoiceType::class, array(
                'choices' => array(
                    'sociéte' => 'sociéte',
                    'candidat' => 'candidat',
                )))
            ->add('questionSecu', ChoiceType::class, array(
                'choices' => array(
                    'Quel est votre animal préféré ?
' => 'questionSecu
',
                    'Quel est votre meilleur joueur ?
' => 'questionSecu
',                    '
Où était votre première voiture ?
' => '
questionSecu
',
                )))
            ->add('reponseSecu',TextType::class)
            ->add('domaine',TextType::class)
            ->add('adresse',TextType::class)
            ->add('tel',TextType::class)
            ->add('mdp', PasswordType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
