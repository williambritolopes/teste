<?php

namespace EinsteinBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MessageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('message')
                ->add('createdDate')
                ->add('updatedDate')
                ->add('deletedDate')
                ->add('user', 'entity', array( //provare a mettere una querybuiler
                            'class'       => 'EinsteinBundle:User',
                            'property'    => 'User',
                            'empty_value' => 'Selecione um Usuário',
                            'required'    => true,
                            'label'       => 'Usuário'
                            )
                       )
                ->add('status', 'entity', array( //provare a mettere una querybuiler
                            'class'       => 'EinsteinBundle:Status',
                            'property'    => 'Status',
                            'empty_value' => 'Selecione um Status',
                            'required'    => true,
                            'label'       => 'Status'
                            )
                       );
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EinsteinBundle\Entity\Message'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'einsteinbundle_message';
    }


}
