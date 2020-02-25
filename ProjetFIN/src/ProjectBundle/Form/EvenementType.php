<?php

namespace ProjectBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class EvenementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //  ->add('photoEvenement', FileType::class, array('label'=>'insert image'))
            ->add('nom', TextType::class, array('attr' => array('class'=>'form-control')))
            ->add('description', TextType::class, array('attr' => array('class'=>'form-control')))
            ->add('date',DateType::class,array('widget'=>'single_text','format'=>'yyyy-MM-dd'))
            ->add('capacite')
            ->add('prix',NumberType::class)
            // ->add('nbParticipant')
            ->add('lieu', TextType::class, array('attr' => array('class'=>'form-control')));
        //  ->add('id_membre');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjectBundle\Entity\Evenement'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projectbundle_evenement';
    }


}
