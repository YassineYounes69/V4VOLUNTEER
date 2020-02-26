<?php

namespace ProjectBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostulationsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('presentation', TextareaType::class)->add('choice',TextareaType::class)->add('reason',TextareaType::class)->add('chooseYou',TextareaType::class)->add('lvlEng', ChoiceType::class, array(
            'choices' => array(
                'A1' => 'A1',
                'A2' => 'A2',
                'B1' => 'B1',
                'B2' => 'B2',
                'C1' => 'C1',
                'C2' => 'C2',
            'expanded' => true)));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjectBundle\Entity\Postulations'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projectbundle_postulations';
    }


}
