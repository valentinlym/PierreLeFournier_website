<?php

namespace App\Form;

use App\Entity\Devis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\{TextType, EmailType, TextareaType};
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DevisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Votre email',
                'attr' => ['placeholder' => 'exemple@exemple.com'],
            ])
            ->add('nom', TextType::class, [
                'label' => 'Votre Nom',
                'attr' => ['placeholder' => 'Dupont'],
            ])
            ->add('prenom', TextType::class,  [
                'label' => 'Votre prénom',
                'attr' => ['placeholder' => 'Jean'],
            ])
            ->add('objet', TextType::class, [
                'label' => 'L\'objet de votre demande',
                'attr' => ['placeholder' => 'Traiteur pour un mariage'],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => ['placeholder' => 'Description…'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Devis::class,
        ]);
    }
}
