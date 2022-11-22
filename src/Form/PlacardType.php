<?php

namespace App\Form;

use App\Entity\Placard;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlacardType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $placard = $options['data'] ?? null;
        $member = $placard->getMember();

        $builder
            ->add('description')
            ->add('publiee')
            ->add('member', null, [
                'disabled'   => true,
            ])
            ->add('pasta', null, [
                'query_builder' => function (PastaRepository $er) use ($member) {
                        return $er->createQueryBuilder('g')
                            ->leftJoin('g.pasta', 'i')
                            ->andWhere('i.owner = :member')
                            ->setParameter('member', $member)
                            ;
                    }
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Placard::class,
        ]);
    }
}
