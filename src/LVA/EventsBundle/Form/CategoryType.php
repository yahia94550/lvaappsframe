<?php

namespace LVA\EventsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Doctrine\ORM\EntityRepository ;
use LVA\EventsBundle\Entity\Theme;
use LVA\EventsBundle\Entity\Univer;

class CategoryType extends AbstractType  {
    
     public function buildForm(FormBuilderInterface $formBuilder, array $options)
    {
        $formBuilder->add('nom', TextType::class);
        //$formBuilder->add('body', TextareaType::class);
        //$formBuilder->add('created', DateTimeType::class);
        $formBuilder->add('theme', EntityType::class, array(
            'class' => 'LVAEventsBundle:Theme',
            'choice_label' => 'nom',
        ));
        $formBuilder->add('univer', EntityType::class, array(
            'class' => 'LVAEventsBundle:Univer',
            'choice_label' => 'nom',
        ));
        $formBuilder->add('submit', SubmitType::class);
    }
    
}
