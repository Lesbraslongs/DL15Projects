<?php

namespace GalleryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class PhotoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('url',FileType::class, array('label' => 'Ajouter Image'))
            ->add('nom')
            ->add('titre')
            ->add('libelle')
            ->add('date', 'date')
            ->add('online')
            ->add('diapo', EntityType::class, ['class' => 'GalleryBundle:Diapo', 'choice_label' => 'titre'])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GalleryBundle\Entity\Photo'
        ));
    }
}
