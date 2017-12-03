<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Mail
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MessageRepository")
 */
class Message
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     * @Assert\Length(min=2, minMessage="Veuillez saisir au moins {{ limit }} caractères.")
     * @Assert\Length(max=50, maxMessage="Veuillez saisir au  plus {{ limit }} caractères.")
     * 
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=50)
     * @Assert\Length(min=2, minMessage="Veuillez saisir au moins {{ limit }} caractères.")
     * @Assert\Length(max=50, maxMessage="Veuillez saisir au  plus {{ limit }} caractères.")
     * 
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet", type="string", length=50)
     * @Assert\Length(min=2, minMessage="Veuillez saisir au moins {{ limit }} caractères.")
     * @Assert\Length(max=50, maxMessage="Veuillez saisir au  plus {{ limit }} caractères.")
     * 
     */
    private $sujet;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=2000)
     * @Assert\Length(min=20, minMessage="Veuillez saisir au moins {{ limit }} caractères.")
     * @Assert\Length(max=2000, maxMessage="Veuillez saisir au  plus {{ limit }} caractères.")
     * 
     */
    private $message;    

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Message
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Message
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set sujet
     *
     * @param string $sujet
     *
     * @return Message
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet
     *
     * @return string
     */
    public function getSujet()
    {
        return $this->sujet;
    }


    /**
     * Set message
     *
     * @param string $message
     *
     * @return Message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
}
