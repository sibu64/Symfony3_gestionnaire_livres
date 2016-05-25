<?php

namespace OC\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OCSiteBundle:Default:index.html.twig');
    }
}
