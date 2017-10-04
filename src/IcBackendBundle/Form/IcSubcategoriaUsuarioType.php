<?php

namespace IcBackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class IcSubcategoriaUsuarioType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cantidad', TextType::class, array(
                'label' => 'Cantidad', 'attr' => array('class' => 'form-control')
            ))
            ->add('idCategoria', 'entity',
                array('class'=>'IcBackendBundle\Entity\IcCategoria',
                    'label'=>'Categoria',
                    'attr' => array('class'=> 'form-control')
                ))
            ->add('idUsuario','entity',
                array('class'=>'IcBackendBundle\Entity\IcUsuario',
                    'label'=>'Usuario',
                    'attr' => array('class'=> 'form-control')
                ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IcBackendBundle\Entity\IcSubcategoriaUsuario'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'icbackendbundle_icsubcategoriausuario';
    }


}
