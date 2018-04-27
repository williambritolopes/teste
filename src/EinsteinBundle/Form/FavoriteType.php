<?php

namespace EinsteinBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FavoriteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('created')
                ->add('updated')
                ->add('deleted')
                ->add('user', 'entity', array( //provare a mettere una querybuiler
                            'class'       => 'EinsteinBundle:User',
                            'property'    => 'User',
                            'empty_value' => 'Selecione um Usuário',
                            'required'    => true,
                            'label'       => 'Usuário'
                            )
                       )
                ->add('magazine', 'entity', array( //provare a mettere una querybuiler
                            'class'       => 'EinsteinBundle:Content',
                            'property'    => 'title',
                            'empty_value' => 'Selecione um Artigo',
                            'required'    => true,
                            'label'       => 'Artigo'
                            )
                    );
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EinsteinBundle\Entity\Favorite'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'einsteinbundle_favorite';
    }


}
