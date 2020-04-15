<?php

namespace ProjectBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LogementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('adresse',null,['attr'=>['class'=>'form-control  ','style'=>'width: 126px;']])
            ->add('etatLog',null,['attr'=>['class'=>'form-control  ','style'=>'width: 126px;']])
            ->add('nbChambre',null,['attr'=>['class'=>'form-control  ','style'=>'width: 126px;']])
            ->add('id_ref',null,['attr'=>['class'=>'form-control  ','style'=>'width: 126px;']])
            ->add('Ajouter',SubmitType::class );

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjectBundle\Entity\Logement'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projectbundle_logement';
    }


}
