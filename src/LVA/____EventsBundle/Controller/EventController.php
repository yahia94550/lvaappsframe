<?php

namespace LVA\EventsBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\EntityRepository ;
use Symfony\Bridge\Doctrine\Form\Type\EntityType; 
use LVA\EventsBundle\Form\EventType ;
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
    public function addAction(Request $request){
        $doctrine = $this->getDoctrine();
        $catEntityRepository = $doctrine->getRepository('LVAEventsBundle:Categorie', 'lvaeventsmanager');
        $categories = $catEntityRepository->findAll();
        // ///////////////////// /////////////////////////////////////
        
        $categorie = new Categorie();
        $rule = new Rule();
        $univers = new Univer();
        $evenement = new Evenement();
        $form = $this->createForm(EventType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && !$form->isEmpty() && $form->isValid()) {
            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager('lvaeventsmanager');
            $entityManager->persist($evenement);
            $entityManager->flush();
            
            $session = $request->getSession();
            $flashBag = $session->getFlashBag();
            $flashBag->add('information', 'Evenement créé avec succés !');
            
            return $this->redirectToRoute('events_homepage');
        }
        $formView = $form->createView();

        return $this->render('LVAEventsBundle:Event:add.html.twig', array(
            'addForm' => $formView
        ));
    }
}