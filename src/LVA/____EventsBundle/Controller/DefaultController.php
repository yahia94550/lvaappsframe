<?php

namespace LVA\EventsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LVAEventsBundle:Default:index.html.twig');
    }
}
