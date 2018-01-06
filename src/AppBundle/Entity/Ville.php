<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Ville
 *
 * @ORM\Table(name="ville", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VilleRepository")
 */
class Ville
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=false)
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $longitude;

    /**
     * @var integer
     *
     * @ORM\Column(name="code_activite", type="integer", nullable=true)
     */
    private $codeActivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="code_priorite", type="integer", nullable=true)
     */
    private $codePriorite;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Ville
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
     * Set latitude
     *
     * @param float $latitude
     *
     * @return Ville
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return Ville
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set codeActivite
     *
     * @param integer $codeActivite
     *
     * @return Ville
     */
    public function setCodeActivite($codeActivite)
    {
        $this->codeActivite = $codeActivite;

        return $this;
    }

    /**
     * Get codeActivite
     *
     * @return integer
     */
    public function getCodeActivite()
    {
        return $this->codeActivite;
    }

    /**
     * Set codePriorite
     *
     * @param integer $codePriorite
     *
     * @return Ville
     */
    public function setCodePriorite($codePriorite)
    {
        $this->codePriorite = $codePriorite;

        return $this;
    }

    /**
     * Get codePriorite
     *
     * @return integer
     */
    public function getCodePriorite()
    {
        return $this->codePriorite;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
