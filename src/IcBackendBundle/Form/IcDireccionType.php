<?php

namespace IcBackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class IcDireccionType extends AbstractType
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
            ->add('idCentro', 'entity',
            array('class' => 'IcBackendBundle\Entity\IcCentroTrabajo',
                'label' => 'Centro de Trabajo',
                'attr' => array('class' => 'form-control')
            ));
    }


    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IcBackendBundle\Entity\IcDireccion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'icbackendbundle_icdireccion';
    }


}
