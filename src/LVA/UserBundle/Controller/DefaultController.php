<?php

namespace LVA\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LVAUserBundle:Default:index.html.twig');
    }
}
