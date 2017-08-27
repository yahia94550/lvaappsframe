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
        
        $theme = new Theme();
        $form = $this->createForm(ThemeType::class, $theme);
        $form->handleRequest($request);
        if ($form->isSubmitted() && !$form->isEmpty() && $form->isValid()) {
            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager('lvaeventsmanager');
            $entityManager->persist($theme);
            $entityManager->flush();
            
            $session = $request->getSession();
            $flashBag = $session->getFlashBag();
            $flashBag->add('information', 'Théme créé avec succés !');
            
            return $this->redirectToRoute('theme_homepage');
        }
        $formView = $form->createView();

        return $this->render('LVAEventsBundle:Theme:add.html.twig', array(
            'addform' => $formView
        ));
        
    }

}