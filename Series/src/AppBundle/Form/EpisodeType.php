<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Test\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;



class EpisodeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numeroEpisode',TextType::class,['label'=>'Numero Episode'])
            ->add('nomEpisode',TextType::class,['label'=>'Nom de l\'épisode'])
            ->add('nomOriginalEpisode',TextType::class,['label'=>'Nom original'])
            ->add('resumeEpisode',TextareaType::class,['label'=>'Résumé'])
            ->add('photo',UrlType::class,['label'=>'Photo'])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Episode'
        ));
    }
}
