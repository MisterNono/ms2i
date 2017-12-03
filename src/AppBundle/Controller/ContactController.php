<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Message;
use AppBundle\Form\MessageType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
// use Doctrine\ORM\EntityManagerInterface;


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
        // On crée un objet Message
        $message = new Message();
        
        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder(MessageType::class, $message);
        
        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();
        
        $result = $this->formProcessing($form, $message, $request);
        
        if ($result == true)
        {
            // On crée le FormBuilder grâce au service form factory
            $formBuilder = $this->get('form.factory')->createBuilder(MessageType::class, new Message());
            
            // À partir du formBuilder, on génère le formulaire
            $form = $formBuilder->getForm();
        }
        
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:Contact:create.html.twig', array(
            "title" => "Contact",
            "form" => $form->createView()
        ));
    }
    
    private function formProcessing($form, $message, $request)
    {
        // la requête est en POST
        if ($request->isMethod('POST')) {
            
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, l'objet $message contient les valeurs entrées dans le formulaire par le visiteur
            $form->handleRequest($request);
            // print_r($message);
            
            // On vérifie que les valeurs entrées sont correctes
            if ($form->isValid()) {
                
                $mailer = $this->get("mailer");
                
                // $result = $this->formProcessing($form, $message, $request, $typeMessage, $companyMail);
                $result = self::sendEmail($mailer, $message, $request);
                
                if ($result > 0)
                {
                    
                    // Usualy, the data are recorded in the database
                    // nothing to do in this application
                    
                    
                    return true;
                }
            }
        }
        
        return false;
    }
    
    
    private static function sendEmail(\Swift_Mailer $mailer, Message $message, Request $request)
    {
        $sujet = "Message du site MS2I Informatique";
        
        $msg = "Message envoyé depuis le site <a href='http://ms2i.net'>MS2I Informatique</a><br />Nom de l'expéditeur : " . $message->getNom() . "<br /><br />";
        $msg .= $message->getMessage();
        
        
        
        // envoi du mail à l'agence
        $mail = \Swift_Message::newInstance()
        ->setSubject($sujet)
        ->setFrom($message->getMail())
        ->setReplyTo($message->getMail())
        ->setTo("noelmaurice4@gmail.com")
        ->setBody($msg, "text/html");
        
        
        $type = $mail->getHeaders()->get('Content-Type');
        // $type->setValue('text/html');
        // $mail->setContentType("text/html");
        $type->setParameter('charset', 'utf-8');
        
        
        $result = $mailer->send($mail);
        
        if ($result > 0)
        {
            $request->getSession()->getFlashBag()->add("notice", "Votre message a bien été envoyé.");
        }
        else
        {
            $request->getSession()->getFlashBag()->add("notice", "Votre message n'a pas pu être envoyé : veuillez réessayer ou appeler GSIGNATURE.");
        }
        
        return $result;
    }
    
    
    
    
    
    
    
    
    // =======================================================================
    
    
    /**
     * @Route("/test", name="contact_test")
     *
     * Activer pour les tests seulement
     *
     */
    public function testEnvoiEmail(\Swift_Mailer $mailer)
    {
        $message = \Swift_Message::newInstance()
        ->setSubject("Test de message")
        ->setFrom("noelmaurice@ms2i.net")
        ->setReplyTo("noelmaurice@ms2i.net")
        ->setTo("noelmaurice4@gmail.com")
        ->setBody("Le mail a bien été envoyé à partir du site MS2I Informatique", "text/html");
        
        
        $type = $message->getHeaders()->get('Content-Type');
        // $type->setValue('text/html');
        $type->setParameter('charset', 'utf-8');
        
        $result = $mailer->send($message);
        
        return $this->render('AppBundle:Default:test.html.twig', array('result' => $result));
        
    }
    
}
