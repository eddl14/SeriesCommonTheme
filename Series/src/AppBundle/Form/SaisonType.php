<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SaisonType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomSaison',TextType::class,['label'=>'Nom'])
            ->add('numeroSaison',TextType::class,['label'=>'Numéro saison'])
            ->add('resumeSaison',TextType::class,['label'=>'Résumé'])
            ->add('anneeProduction',DateType::class,['widget'=>'single_text','format'=>'yyyy-MM-dd'])
            ->add('posterSaison',TextType::class,['label'=>'Poster'])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Saison'
        ));
    }
}
