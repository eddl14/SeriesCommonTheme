<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SerieType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomSerie')
            ->add('nomOriginalSerie')
            ->add('synopsisSerie')
            ->add('resumeSerie')
            ->add('anneeProdSerie', 'datetime')
            ->add('posterSerie')
            ->add('utilisateurs')
            ->add('critiques')
            ->add('acteurs')
            ->add('genres')
            ->add('producteurs')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Serie'
        ));
    }
}
