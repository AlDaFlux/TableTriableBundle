<?php

namespace Aldaflux\TableTriableBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/tabletriable")
     */
    public function indexAction()
    {
        return $this->render('AldafluxTableTriableBundle:Default:index.html.twig');
    }
}


