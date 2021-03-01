<?php

namespace App\Form;

use App\Entity\Client;
use App\Entity\Bank;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')

            ->add('surename')

            ->add('age')

            ->add('pin')

            ->add('bank', EntityType::class,[
                
                'class' => Bank::class,

                'choice_label' => 'name',

                'choice_value' => 'id']);
        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
