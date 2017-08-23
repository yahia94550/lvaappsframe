<?php

namespace LVA\EventsBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\EntityRepository ;
use Symfony\Bridge\Doctrine\Form\Type\EntityType; 
use LVA\EventsBundle\Entity\Evenement;
use LVA\EventsBundle\Entity\Categorie ;
use LVA\EventsBundle\Entity\Univer ;
use Symfony\Component\HttpFoundation\Request;
use LVA\EventsBundle\Entity\Rule ;
use RRule\RRule;
use RRule\RSet ;
/**
 * Description of EventController
 * Permet de sauvegardé un nouveau évenement dans la base de donnée
 * @author amine
 */
class EventController extends Controller {
    public function indexAction()
    {
        $rrule = new RRule([
	'FREQ' => 'MONTHLY',
	'INTERVAL' => 1,
	'DTSTART' => '2015-06-01',
	'COUNT' => 6
]);

        return $this->render('LVAEventsBundle:Event:index.html.twig', array(
          'rules' => $rrule
      ));
    }
    public function newEventAction(Request $request){
        $doctrine = $this->getDoctrine();
        $catEntityRepository = $doctrine->getRepository('LVAEventsBundle:Categorie', 'lvaeventsmanager');
        $categories = $catEntityRepository->findAll();
        /*foreach($categories as $cat){
            echo $cat->getNom();
        }
        die;*/
        $categorie = new Categorie ();
        $rrule = new Rule();
        $univers = new Univer();
        $evenement = new Evenement();
        $form = $this->createFormBuilder($evenement)
            ->add('nom', TextType::class, array('label' => 'Nom'))
            ->add('organisateursId', NumberType::class, array('label' => 'Organisateur') )
            ->add('adresse', TextType::class, array('label' => 'Adresse'))
            ->add('villesId', NumberType::class, array('label' => 'Ville'))
            ->add('aCoteDe', TextType::class, array('label' => 'A coté De'))
            ->add('Tel1', TextType::class, array('label' => 'Numéro de Télephone 1'))
            ->add('Tel2', TextType::class, array('label' => 'Numéro de Télephone 2'))
            ->add('Email', TextType::class, array('label' => 'Adresse Mail'))
            ->add('categories', EntityType::class, array(
                    'class' => 'LVAEventsBundle:Categorie',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                    ->orderBy('u.nom', 'ASC');
                    },
                    'choice_label' => 'nom',
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
            ->add('save', SubmitType::class, array('label' => 'Enregistrer'))
            ->getForm();

        return $this->render('LVAEventsBundle:Event:newevent.html.twig', array(
            'formulaire' => $form->createView(),
        ));
    }
}