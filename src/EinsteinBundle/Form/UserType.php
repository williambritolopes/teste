<?php

namespace EinsteinBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')
            ->add('nick')
            ->add('password')
            ->add('email')
            ->add('cellPhone')
            ->add('specialty')
            ->add('created')
            ->add('updated')
            ->add('deleted')
            // ->add('type')
            ->add('type', 'entity', array( //provare a mettere una querybuiler
                        'class'       => 'EinsteinBundle:TypeUser',
                        'property'    => 'Type',
                        'empty_value' => 'Selecione uma categoria',
                        'required'    => true,
                        'label'       => 'Tipo'))
            ->add('gender', 'entity', array( //provare a mettere una querybuiler
                        'class'       => 'EinsteinBundle:Gender',
                        'property'    => 'Gender',
                        'empty_value' => 'Selecione um Sexo',
                        'required'    => true,
                        'label'       => 'Sexo'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EinsteinBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'einsteinbundle_user';
    }


}
