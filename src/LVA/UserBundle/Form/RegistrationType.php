<?php

namespace LVA\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RegistrationType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom');
        $builder->add('prenom');
        $builder->add('adresse');
        $builder->add('tel');
        $builder->add('civilite', ChoiceType::class, array(
    'choices'  => array(
        'Madame' => 'mme',
        'Mademoiselle' => 'mlle',
        'Monsieur' => 'mr',
    ),
));
        $builder->add('ville_id');
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

}
