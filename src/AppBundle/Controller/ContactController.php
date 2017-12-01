<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/contact")
 */
class ContactController extends Controller
{
    /**
     * @Route("/", name="contact")
     * 
     * http://localhost:8080/ms2i/web/app_dev.php/contact/
     *
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Contact:create.html.twig', array(
            "title" => "Contact"
        ));
    }
    
}
