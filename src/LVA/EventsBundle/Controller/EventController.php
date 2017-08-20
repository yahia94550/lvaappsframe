<?php

namespace LVA\EventsBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use LVA\EventsBundle\Entity\Evenement;
use LVA\EventsBundle\Entity\Categorie ;
use LVA\EventsBundle\Entity\Univer ;
use Symfony\Component\HttpFoundation\Request;
use LVA\EventsBundle\Entity\Rrule ;
//use RRule\RRule;
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
        $categorie = new Categorie ();
        $rrule = new Rrule();
        $univers = new Univer();
        $rrule = new RRule([
	'FREQ' => 'MONTHLY',
	'INTERVAL' => 1,
	'DTSTART' => '2015-06-01',
	'COUNT' => 6
         ]);
        $evenement = new Evenement();
        $evenement->setNom('mamanif');
        $evenement->setOrganisateursId(1);
        $evenement->setAdresse('mon adresse');
        $evenement->setVillesId(2);
        $evenement->setACoteDe('Bordeaux');
        $evenement->setTel1('0122453565');
        $evenement->setTel2('0122453565');
        $evenement->setEmail('manif@gmail.com');
        $evenement->setParticipantsType(1);
        $evenement->setPayantGratuit(1);
        $evenement->setTarif(200);
        $evenement->setCategories($categorie->setNom('jouets'));
        $evenement->setRrule($rrule->setFreq('MONTHLY'));
        $evenement->setRrule($rrule->setIntervall(1));
        $evenement->setRrule($rrule->setDtstart('2015-06-01'));
        $evenement->setRrule($rrule->setCountt(6));
        $evenement->setUnivers($univers->setNom('Automobiles'));

        $form = $this->createFormBuilder($evenement)
            ->add('nom', HiddenType::class, array(
    'data' => 'abcdef',
))
            ->add('adresse', StringType::class, array(
    'widget' => 'choice',
))
            ->getForm();

        return $this->render('AcmeTaskBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
        ));
        
        
        return $this->render('LVAEventsBundle:Event:newevent.html.twig');
    }
}
