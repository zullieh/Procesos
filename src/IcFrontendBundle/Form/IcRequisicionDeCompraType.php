<?php

namespace IcFrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;



class IcRequisicionDeCompraType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('folioRequisicion', TextType::class, array(
                'label' => 'Folio', 'read_only' => 'true', 'attr' => array('class' => 'form-control')
            ))
            ->add('fechaSolicitud', DateType::class, array(
             'attr' => array('class' => 'js-datepicker')
            ))

            ->add('fechaEntrega', DateType::class, array(
                'attr' => array('class' => 'js-date')
            ))

            ->add('status', TextType::class, array(
                'label' => 'Estado de Solicitud', 'read_only' => 'true', 'attr' => array('class' => 'form-control')
            ))
            ->add('numeroEmpleado', TextType::class, array(
                'label' => 'Número de Empleado', 'read_only' => 'true', 'attr' => array('class' => 'form-control')
            ))
            ->add('observaciones', TextareaType::class, array(
                'label' => 'Observaciones', 'attr' => array('class' => 'form-control')
            ))
            ->add('firmaSolicitante', TextareaType::class, array(
                'label' => 'Firma Solicitante', 'attr' => array('class' => 'form-control')
            ))
            ->add('firmaAutorizacion', TextareaType::class, array(
                'label' => 'Firma de Autorización', 'attr' => array('class' => 'form-control')
            ))
            ->add('descripcion', TextType::class, array(
                'label' => 'Descripción', 'attr' => array('class' => 'form-control')
            ))
            ->add('codigoSku', TextType::class, array(
                'label' => 'Código Sku', 'attr' => array('class' => 'form-control')
            ))
            ->add('cantidad', TextType::class, array(
                'label' => 'Cantidad', 'attr' => array('class' => 'form-control')
            ))
            ->add('idCentroTrabajo', EntityType::class, array('class' => 'IcFrontendBundle\Entity\IcCentroTrabajo',
                'label' => 'Centro de Trabajo', 'attr' => array('class' => 'form-control')))

           ->add('idUsuarioSolicitante', TextType::class, array(
                'label' => 'Usuario', 'read_only' => 'true', 'attr' => array('class' => 'form-control')
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IcFrontendBundle\Entity\IcRequisicionDeCompra'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'icfrontendbundle_icrequisiciondecompra';
    }


}
