<?php

namespace ProjectBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class DemandeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeDemande', ChoiceType::class, [
                'choices'  => [
                    'fourniture scolaire'=> 'fourniture scolaire' ,
                    'vetements'=> 'vetements' ,
                    'materiel'=> 'materiel' ,
                    'nourriture'=> 'nourriture' ,
                ],
            ])
            ->add('titreDemande')
            ->add('descriptionDemande')
            ->add('photoDemande', FileType::class, array('data_class'=>null, 'required'=>false))

        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjectBundle\Entity\Demande'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projectbundle_demande';
    }


}
