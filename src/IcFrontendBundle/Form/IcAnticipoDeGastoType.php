<?php

namespace IcFrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IcAnticipoDeGastoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('folioAnticipo')->add('fechaSolicitud')->add('metodoPago')->add('numeroTarjeta')->add('numeroCuenta')->add('cuentaContable')->add('numeroEmpleado')->add('tipoMoneda')->add('destinoDeViaje')->add('fechaDesde')->add('fechaHasta')->add('motivoDelViaje')->add('firmaSolicitante')->add('firmaAutorizacion')->add('idCentroTrabajo')->add('idUsuarioSolicitante');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IcFrontendBundle\Entity\IcAnticipoDeGasto'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'icfrontendbundle_icanticipodegasto';
    }


}
