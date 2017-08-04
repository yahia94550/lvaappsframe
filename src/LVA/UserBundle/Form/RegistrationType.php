<?php

namespace LVA\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class RegistrationType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom');
        $builder->add('prenom');
        $builder->add('adresse');
        $builder->add('tel');
        $builder->add('civilite', CollectionType::class, array(
                   'type' => 'choice',
                   'options' => array(
                       'choices' => array(
                           'ROLE_ADMIN' => 'Admin',
                           'ROLE_EDITOR' => 'Editor'
                       )
                   )
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
