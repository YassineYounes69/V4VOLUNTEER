<?php

namespace ProjectBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OpportunityType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomop')->add('domaine', ChoiceType::class, [
            'choices' => [
                'Hard Skills' => 'Hard Skills',
                'Soft Skills' => 'Soft Skills',
            ]
        ])->add('descr')->add('jd')->add('startDate')->add('endDate')->add('limitDate')->add('adr')->add('img1', FileType::class, array('data_class' => null), )->add('img2', FileType::class, array('data_class' => null))->add('img3', FileType::class, array('data_class' => null));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjectBundle\Entity\Opportunity'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projectbundle_opportunity';
    }


}
