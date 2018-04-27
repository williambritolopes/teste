<?php

namespace EinsteinBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MagazineType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('number')
                ->add('description')
                ->add('andressCover')
                ->add('andressFeatured')
                ->add('created')
                ->add('updated')
                ->add('deleted')
                ->add('vol', 'entity', array( //provare a mettere una querybuiler
                        'class'       => 'EinsteinBundle:Version',
                        'property'    => 'Version',
                        'empty_value' => 'Selecione uma Versão',
                        'required'    => true,
                        'label'       => 'Versão'
                        )
                )
                ->add('status', 'entity', array( //provare a mettere una querybuiler
                        'class'       => 'EinsteinBundle:Status',
                        'property'    => 'Status',
                        'empty_value' => 'Selecione uma Status',
                        'required'    => true,
                        'label'       => 'Status'
                        )
                )
                ->add('language', 'entity', array( //provare a mettere una querybuiler
                        'class'       => 'EinsteinBundle:Language',
                        'property'    => 'Idiom',
                        'empty_value' => 'Selecione uma Status',
                        'required'    => true,
                        'label'       => 'Language'
                        )
                );
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EinsteinBundle\Entity\Magazine'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'einsteinbundle_magazine';
    }


}
