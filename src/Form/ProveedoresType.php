<?php

namespace App\Form;

use App\Entity\Proveedores;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProveedoresType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre', TextType::class, [
                'label' => 'Nombre',
                'attr'=>[
                    'placeholder'=>'Nombre',
                    'autocomplete'=>'off',
                    'class'=>'form-control',
                    'required'=> true
                ]
                ])

            ->add('email', EmailType::class, [
                'label' => 'Correo electrónico',
                'attr'=>[
                    'placeholder'=>'Correo electrónico',
                    'autocomplete'=>'off',
                    'class'=>'form-control',
                    'required'=> true
                ]
                ])
            ->add('telefono')
            ->add('tipo')
            ->add('activo')

            ->add('submit', SubmitType::class,[
                'label' => 'Guardar',
                'attr'=>[
                    'class' => 'btn btn-primary'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Proveedores::class,
        ]);
    }
}
