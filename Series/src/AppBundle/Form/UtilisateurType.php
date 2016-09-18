<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Test\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



class UtilisateurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomUtilisateur',TextType::class,['label'=>'Nom'])
            ->add('prenomUtilisateur',TextType::class,['label'=>'Prénom'])
            ->add('pseudoUtilisateur',TextType::class,['label'=>'Pseudo'])
            ->add('plainMdpUtilisateur',RepeatedType::class,array(
                    'type'=>PasswordType::class,
                    'first_options'=>['label'=>'Veuillez rentrer votre Mdp'],
                    'second_options'=> ['label'=>'Confirmez votre Mdp']))
            ->add('mailUtilisateur',EmailType::class,['label'=>'Mail'])
            ->add('dateNaissance', DateType::class,['widget'=>'single_text','format'=>'yyyy-MM-dd'])
            ->add('photo',UrlType::class,['label'=>'Photo'])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Utilisateur'
        ));
    }
}
