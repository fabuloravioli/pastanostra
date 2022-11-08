<?php

namespace App\Form;

use App\Entity\Cottura;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CotturaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        if ($options['display_pasta']){
            $builder->add('pasta');
        }
        $builder
            ->add('typo')
            ->add('tiempo')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cottura::class,
            'display_pasta' => true
        ]);
        $resolver->SetAllowedTypes('display_pasta', 'bool');
    }
}
