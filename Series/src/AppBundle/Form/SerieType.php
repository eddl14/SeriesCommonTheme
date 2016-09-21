<?php

namespace AppBundle\Form;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
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
            ->add('nomSerie',TextType::class,['label'=>'Nom'])
            ->add('nomOriginalSerie',TextType::class,['label'=>'Nom original'])
            ->add('synopsisSerie',TextType::class,['label'=>'Synopsis'])
            ->add('resumeSerie',TextType::class,['label'=>'Résumé'])
            ->add('anneeProdSerie',DateType::class,['widget'=>'single_text','format'=>'yyyy-MM-dd'])
            ->add('photo',UrlType::class,['label'=>'Photo'])
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
