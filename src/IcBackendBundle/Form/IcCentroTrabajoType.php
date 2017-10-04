<?php

namespace IcBackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class IcCentroTrabajoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class, array(
                'label' => 'Nombre', 'attr' => array('class' => 'form-control')
            ))
            ->add('direccion', TextType::class, array(
                'label' => 'Dirección', 'attr' => array('class' => 'form-control')
            ))
            ->add('correo', EmailType::class, array(
                'label' => 'Correo Electrónico', 'attr' => array('class' => 'form-control')
            ))
            ->add('telefono', TextType::class,array(
                'label' => 'Teléfono', 'attr' => array('class' => 'form-control')
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IcBackendBundle\Entity\IcCentroTrabajo'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'icbackendbundle_iccentrotrabajo';
    }


}
