<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/info")
 */
class InfoController extends Controller
{
    /**
     * @Route("/cgv", name="info_cgv")
     *
     */
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:Info:read_cgv.html.twig');
    }
    
    
}
