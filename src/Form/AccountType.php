<?php

namespace App\Form;

use App\Entity\Account;
use App\Entity\Client;
use App\Entity\Bank;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AccountType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            

            ->add('money')

            ->add('client',EntityType::class,[

                'class' => Client::class,

                'choice_label' => 'name',

                'choice_value' => 'id'])

            ->add('bank',EntityType::class,[

                'class' => Bank::class,

                'choice_label' => 'name',

                'choice_value' => 'id']);
        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Account::class,
        ]);
    }
}
