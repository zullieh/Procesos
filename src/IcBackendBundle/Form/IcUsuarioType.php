<?php

namespace IcBackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class IcUsuarioType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre', TextType::class, array(
            'label' => 'Nombre' , 'attr'=> array('class' => 'form-control')
        ))
            ->add('apellido', TextType::class, array(
                'label' => 'Apellido', 'attr' => array('class' => 'form-control')
            ))
            ->add('correo', EmailType::class, array(
                'label' => 'Correo Electrónico', 'attr' => array('class' => 'form-control')
            ))
            ->add('contrasena', PasswordType::class, array(
                'label' => 'Contraseña', 'attr' => array('class' => 'form-control')
            ))
            ->add('fechaInicio', DateType::class, array(
                'widget' => 'single_text', 'attr' => array('class' => 'form-control')
            ))
            ->add('fechaModificacion', DateType::class, array(
                'widget' => 'single_text', 'attr' => array('class' => 'form-control')
            ))

            ->add('telefono', TextType::class, array(
                'label' => 'Teléfono', 'attr' => array('class' => 'form-control')
            ))

            ->add('idCentro', 'entity',
                array('class'=> 'IcBackendBundle\Entity\IcCentroTrabajo',
                    'label' => 'Centro de Trabajo',
                    'attr' => array('class'=> 'form-control')
                ))
            ->add('idDireccion', 'entity',
                array('class'=> 'IcBackendBundle\Entity\IcDireccion',
                    'label'=> 'Dirección',
                    'attr'=> array('class'=> 'form-control')
                ))
            ->add('idGerencia', 'entity',
                array('class'=> 'IcBackendBundle\Entity\IcGerencia',
                    'label'=> 'Gerencia',
                    'attr'=> array('class'=>'form-control')
                ))
            ->add('idArea', 'entity',
                array('class'=> 'IcBackendBundle\Entity\IcArea',
                    'label'=>'Área',
                    'attr'=>array('class'=>'form-control')
                ))
            ->add('idPuesto', 'entity',
                array('class'=> 'IcBackendBundle\Entity\IcPuesto',
                    'label'=>'Puesto',
                    'attr'=>array('class'=>'form-control')
                ))
            ->add('idCategoria', 'entity',
                array('class'=> 'IcBackendBundle\Entity\IcCategoria',
                    'label'=>'Categoria',
                    'attr'=> array('class'=>'form-control')
                ))
            ->add('idSubcategoria', 'entity',
                array('class'=>'IcBackendBundle\Entity\IcSubcategoria',
                    'label'=>'Subcategoria',
                    'attr'=>array('class'=>'form-control')
                ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IcBackendBundle\Entity\IcUsuario'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'icbackendbundle_icusuario';
    }


}
