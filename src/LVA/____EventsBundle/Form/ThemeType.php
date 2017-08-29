<?php

namespace LVA\EventsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\EntityRepository ;
use LVA\EventsBundle\Entity\Theme;


class ThemeType extends AbstractType {
    public function buildForm(FormBuilderInterface $formBuilder, array $options)
    {
        $formBuilder
                ->add('nom', TextType::class)
                ->add('categorie', EntityType::class, array(
            'class' => 'LVAEventsBundle:Categorie',
            'choice_label' => 'nom',
            'choice_value' => 'id',
        ))
               ->add('submit', SubmitType::class);
    }
}
