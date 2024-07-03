<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Couleur;
use App\Entity\Marque;
use App\Entity\Typebiere;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prix_achat')
            ->add('volume')
            ->add('titrage')
            ->add('marque', EntityType::class, [
                'class' => Marque::class,
                'choice_label' => 'id',
            ])
            ->add('couleur', EntityType::class, [
                'class' => Couleur::class,
                'choice_label' => 'id',
            ])
            ->add('type', EntityType::class, [
                'class' => Typebiere::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
