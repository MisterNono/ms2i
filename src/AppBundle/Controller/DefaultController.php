<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\GlobalValue;
use Doctrine\ORM\EntityManagerInterface;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     * 
     * http://localhost:8080/ms2i/web/app_dev.php/
     * 
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        return $this->render('AppBundle:Default:index.html.twig', array(
            "title" => "Accueil",
            "listVille" => self::getRandomListVille($em),
            "listMarqueur" => $em->getRepository("AppBundle:Ville")->findAll(),
            ));
    }
    
    
    
    public static function getRandomListVille (EntityManagerInterface $em)
    {
        $NB_MAX_ELEMENTS = 24;
        
        $lieux = $em->getRepository("AppBundle:Ville")->findAllVille(1);
        $lieuxTmp = $em->getRepository("AppBundle:Ville")->findAllVille(0);
        $lieuxTmp = GlobalValue::getRandomData($lieuxTmp);
        $lieux = array_merge($lieux, array_slice($lieuxTmp, 0, $NB_MAX_ELEMENTS - count($lieux)));
        
        return $lieux;
    }
    
    
    
    /**
     * @Route("/test", name="test")
     *
     */
    public function testAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        return $this->render('AppBundle:Default:test.html.twig', array(
            "title" => "Accueil",
            "listVille" => self::getRandomListVille($em),
            "listMarqueur" => $em->getRepository("AppBundle:Ville")->findAll(),
        ));
    }
    
}
