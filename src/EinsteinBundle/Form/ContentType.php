<?php

namespace EinsteinBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('issn')
                ->add('articleId')
                ->add('contrib')
                ->add('autorNotes')
                ->add('pubDate')
                ->add('abstract')
                ->add('keywords')
                ->add('volume')
                ->add('issue')
                ->add('fpage')
                ->add('lpage')
                ->add('contentPt')
                ->add('contentEn')
                ->add('referencies')
                ->add('title')
                ->add('created')
                ->add('updated')
                ->add('deleted')
                ->add('content')
                ->add('file')
                ->add('magazine', 'entity', array( //provare a mettere una querybuiler
                    'class'       => 'EinsteinBundle:Magazine',
                    'property'    => 'Number',
                    'empty_value' => 'Selecione um Revista',
                    'required'    => true,
                    'label'       => 'Revista'
                    )
               );
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EinsteinBundle\Entity\Content'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'einsteinbundle_content';
    }


}
