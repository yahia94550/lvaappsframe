<?php

namespace LVA\EventsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\EntityRepository ;
use Symfony\Bridge\Doctrine\Form\Type\EntityType; 
use LVA\EventsBundle\Form\RuleType ;
use LVA\EventsBundle\Entity\Evenement;
use Symfony\Component\HttpFoundation\Request;
use LVA\EventsBundle\Entity\Rule ;
use RRule\RRule;
use RRule\RSet ;
class RuleController extends Controller {
    
    public function indexAction()
    {
        $rule = new RRule([
	'FREQ' => 'MONTHLY',
	'INTERVAL' => 1,
	'DTSTART' => '2015-06-01',
	'COUNT' => 6
]);

        return $this->render('LVAEventsBundle:Rule:index.html.twig', array(
          'rules' => $rule
      ));
    }
    public function addAction(Request $request){
        $doctrine = $this->getDoctrine();
        $catEntityRepository = $doctrine->getRepository('LVAEventsBundle:Categorie', 'lvaeventsmanager');
        $categories = $catEntityRepository->findAll();
        // ///////////////////// /////////////////////////////////////
        
        //$categorie = new Categorie();
        $rule = new Rule();
        //$univers = new Univer();
        $evenement = new Evenement();
        $form = $this->createForm(RuleType::class, $rule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && !$form->isEmpty() && $form->isValid()) {
            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager('lvaeventsmanager');
            $entityManager->persist($rule);
            $entityManager->flush();
            
            $session = $request->getSession();
            $flashBag = $session->getFlashBag();
            $flashBag->add('information', 'Rules créé avec succés !');
            
            return $this->redirectToRoute('rule_homepage');
        }
        $formView = $form->createView();

        return $this->render('LVAEventsBundle:Rule:add.html.twig', array(
            'addForm' => $formView
        ));
    }
    
}
