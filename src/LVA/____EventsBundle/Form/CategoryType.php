<?php

namespace LVA\EventsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\EntityRepository ;
use LVA\EventsBundle\Entity\Theme;
use LVA\EventsBundle\Entity\Univer;

class CategoryType extends AbstractType  {
    
     public function buildForm(FormBuilderInterface $formBuilder, array $options)
    {
        $formBuilder->add('nom', TextType::class);
        $formBuilder->add('submit', SubmitType::class);
    }
    
}
