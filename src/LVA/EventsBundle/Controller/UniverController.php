<?php
namespace LVA\EventsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use LVA\EventsBundle\Entity\Univer;
use LVA\EventsBundle\Form\UniverType ;

class UniverController extends Controller {
    
    public function indexAction()
    {
        $doctrine = $this->getDoctrine();
        $entityRepository = $doctrine->getRepository('LVAEventsBundle:Univer', 'lvaeventsmanager');
        $results = $entityRepository->findAll();
        return $this->render('LVAEventsBundle:Univer:index.html.twig',  array(
            'resultats' => $results ));
    }
    
    public function addAction(Request $request) {
        
    }

}
