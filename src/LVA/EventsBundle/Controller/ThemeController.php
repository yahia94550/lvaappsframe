<?php

namespace LVA\EventsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use LVA\EventsBundle\Entity\Theme;
use LVA\EventsBundle\Form\ThemeType ;


class ThemeController extends Controller {
    
    public function indexAction()
    {
        $doctrine = $this->getDoctrine();
        $entityRepository = $doctrine->getRepository('LVAEventsBundle:Theme', 'lvaeventsmanager');
        $results = $entityRepository->findAll();
        return $this->render('LVAEventsBundle:Theme:index.html.twig',  array(
            'resultats' => $results ));
    }
    
    public function addAction(Request $request) {
        
    }

}