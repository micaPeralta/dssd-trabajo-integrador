<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;


class TrabajoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('tema',ChoiceType::class, array(
                        'choices'  => array(
                            'Cloud' => 'cloud',
                            'WS' => 'ws',
                            'BPM' => 'bpm',
                            'SOA' => 'soa',
                        )))
            ->add('tipoPresentacion',ChoiceType::class, array(
                        'choices'  => array(
                            'Poster' => 'poster',
                            'Conferencia' => 'conferencia'
                        )))
            ->add('autor')
            ->add('autoresSecundarios')
          //  ->add('aprobado')
            ->add('resumen',TextareaType::class, array(
                            'attr' => array('class' => 'materialize-textarea')))
            ->add('correoGmail',EmailType::class)
            ->add('correo',EmailType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Trabajo'
        ));
    }
}
