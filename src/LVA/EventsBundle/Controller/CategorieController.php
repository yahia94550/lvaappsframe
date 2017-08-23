<?php


namespace LVA\EventsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use LVA\EventsBundle\Entity\Categorie;
use LVA\EventsBundle\Form\CategoryType ;
use Doctrine\ORM\EntityRepository ;

class CategorieController extends Controller {
    public function indexAction()
    {
        $doctrine = $this->getDoctrine();
        $entityRepository = $doctrine->getRepository('LVAEventsBundle:Categorie', 'lvaeventsmanager');
        $results = $entityRepository->findAll();
        return $this->render('LVAEventsBundle:Categorie:index.html.twig',  array(
            'resultats' => $results ));
    }
    
    public function addAction(Request $request)
    {
        $categorie = new Categorie();
        $form = $this->createForm(CategoryType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && !$form->isEmpty() && $form->isValid()) {
            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager('lvaeventsmanager');
            $entityManager->persist($categorie);
            $entityManager->flush();
            
            $session = $request->getSession();
            $flashBag = $session->getFlashBag();
            $flashBag->add('information', 'Catégorie créé avec succés !');
            
            return $this->redirectToRoute('category_homepage');
        }
        $formView = $form->createView();

        return $this->render('LVAEventsBundle:Categorie:add.html.twig', array(
            'addForm' => $formView
        ));
    }
}