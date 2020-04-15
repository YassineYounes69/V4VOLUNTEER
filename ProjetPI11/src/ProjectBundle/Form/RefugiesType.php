<?php

namespace ProjectBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RefugiesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('paysRef',null,['attr'=>['class'=>'form-control  ','style'=>'width: 126px;']])
            ->add('etatRef',null,['attr'=>['class'=>'form-control  ','style'=>'width: 126px;']])
            ->add('nomRef',null,['attr'=>['class'=>'form-control  ','style'=>'width: 126px;']])
            ->add('prenomRef',null,['attr'=>['class'=>'form-control  ','style'=>'width: 126px;']])
            ->add('ageRef',null,['attr'=>['class'=>'form-control  ','style'=>'width: 126px;']])
            ->add('genderRef',null,['attr'=>['class'=>'form-control  ','style'=>'width: 126px;']])
            ->add('image',null,['attr'=>['class'=>'form-control  ','style'=>'width: 126px;']])
            ->add('Ajouter',SubmitType::class );

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjectBundle\Entity\Refugies'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projectbundle_refugies';
    }


}
