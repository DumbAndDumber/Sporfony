<?php

namespace SporFonyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SporFonyBundle:Default:index.html.twig');
    }
}
