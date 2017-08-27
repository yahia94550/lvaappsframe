<?php

namespace LVA\EventsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\EntityRepository ;
use LVA\EventsBundle\Entity\Evenement;
use LVA\EventsBundle\Entity\Categorie;
class EventType extends AbstractType {
    
     public function buildForm(FormBuilderInterface $formBuilder, array $options)
    {
        
                  $formBuilder ->add('univer', EntityType::class, array(
                    'class' => 'LVAEventsBundle:Univer',
                    'choice_label' => 'nom',
                    'choice_value' => 'id',   
                    'multiple' => true,
                ))
                    ->add('nom', TextType::class, array('label' => 'Nom'))
                    ->add('organisateurId', NumberType::class, array('label' => 'Organisateur') )
                    ->add('adresse', TextType::class, array('label' => 'Adresse'))
                    ->add('villeId', NumberType::class, array('label' => 'Ville'))
                    ->add('aCoteDe', TextType::class, array('label' => 'A coté De'))
                    ->add('Tel1', TextType::class, array('label' => 'Numéro de Télephone 1'))
                    ->add('Tel2', TextType::class, array('label' => 'Numéro de Télephone 2', 'required' => false))
                    ->add('Email', TextType::class, array('label' => 'Adresse Mail'))
                    ->add('categorie', EntityType::class, array(
                            'class' => 'LVAEventsBundle:Categorie',
                            'choice_label' => 'nom',
                            'attr_value' => 'id', ////// un soucis iciiiiiiii //////
                        ))
                    ->add('ParticipantsType', ChoiceType::class, 
                    array(
                        'label' => 'Type de participant',
                        'choices' => 
                        array(
                             'Particulier' => false,
                            'Professionnel' => true,
                            ),
                        )
                    )
                    ->add('PayantGratuit', ChoiceType::class, 
                    array(
                            'label' => 'Type de manifestation',
                            'choices' => 
                            array(
                                'Gratuite' => false,
                                'Payante' => true,
                            ),
                        )
                    )
                    ->add('save', SubmitType::class, array('label' => 'Enregistrer'));
    }
    
}
