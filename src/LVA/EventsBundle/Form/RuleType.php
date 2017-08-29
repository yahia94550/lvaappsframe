<?php

namespace LVA\EventsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\EntityRepository ;
use LVA\EventsBundle\Entity\Rule;

class RuleType extends AbstractType {

    public function buildForm(FormBuilderInterface $formBuilder, array $options)
    {
        
        $formBuilder ->add('freq',ChoiceType::class,
            array(
                    'label' => 'Fréquence de évenement',
                    'choices' => array(
                            'Date unique' => '1',
                            'Journalier' => '2',
                            'Hebdomadaire' => '3',
                            'Mensuel' => '4'
                        ),
                        'choices_as_values' => true,
                        'multiple'=>false,
                        'expanded'=>true
                        )
                    )
                    ->add('dtstart',DateType::class,array(
                        'label' => 'Date de l\'évenement',
                        'label' => 'Date du début',
                        'widget' => 'choice',
                    ))
        ->add('dtend',DateType::class,array(
                        'label' => 'Date du début',
                        'widget' => 'choice',
                    ));
        
    }
}