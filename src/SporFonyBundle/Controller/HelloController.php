<?php

namespace SporFonyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    public function indexAction()
    {
        return $this->render('SporFonyBundle:Hello:index.html.twig', ['toto' => 'tata']);
    }

}
