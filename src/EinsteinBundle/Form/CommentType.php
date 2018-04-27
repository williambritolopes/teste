<?php

namespace EinsteinBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('comment')
                ->add('created')
                ->add('updated')
                ->add('deleted')
                ->add('user', 'entity', array( //provare a mettere una querybuiler
                        'class'       => 'EinsteinBundle:User',
                        'property'    => 'User',
                        'empty_value' => 'Selecione uma Usuário',
                        'required'    => true,
                        'label'       => 'Usuário'
                        )
                )
                ->add('status', 'entity', array( //provare a mettere una querybuiler
                    'class'       => 'EinsteinBundle:Status',
                    'property'    => 'Status',
                    'empty_value' => 'Selecione um status',
                    'required'    => true,
                    'label'       => 'Status'
                    )
               )
                ->add('content', 'entity', array( //provare a mettere una querybuiler
                        'class'       => 'EinsteinBundle:Content',
                        'property'    => 'Articleid',
                        'empty_value' => 'Selecione um conteúdo',
                        'required'    => true,
                        'label'       => 'Conteúdo'
                ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EinsteinBundle\Entity\Comment'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'einsteinbundle_comment';
    }


}
