<?php

namespace AppBundle\DataFixtures;


use AppBundle\Entity\Ville;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class VilleData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $list = array();
        
        $list = array();
        
        $ville = new Ville();
        $ville->setNom("Montpellier");
        $ville->setLatitude(43.6);
        $ville->setLongitude(3.8833);
        $ville->setCodePriorite(1);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Sète");
        $ville->setLatitude(43.4018);
        $ville->setLongitude(3.6966);
        $ville->setCodePriorite(0);
        $list[] = $ville;
       
        $ville = new Ville();
        $ville->setNom("Juvignac");
        $ville->setLatitude(43.6167);
        $ville->setLongitude(3.8);
        $ville->setCodePriorite(1);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Montarnaud");
        $ville->setLatitude(43.65);
        $ville->setLongitude(3.7);
        $ville->setCodePriorite(1);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Saint Jean de Fos");
        $ville->setLatitude(43.7);
        $ville->setLongitude(3.55);
        $ville->setCodePriorite(0);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Gignac");
        $ville->setLatitude(43.653241);
        $ville->setLongitude(3.551364);
        $ville->setCodePriorite(1);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Clermont l'Hérault");
        $ville->setLatitude(43.627590);
        $ville->setLongitude(3.429495);
        $ville->setCodePriorite(1);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Saint Jean de Védas");
        $ville->setLatitude(43.575267);
        $ville->setLongitude(3.826215);
        $ville->setCodePriorite(0);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Pignan");
        $ville->setLatitude(43.581903);
        $ville->setLongitude(3.761729);
        $ville->setCodePriorite(1);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Vailhauques");
        $ville->setLatitude(43.672261);
        $ville->setLongitude(3.717986);
        $ville->setCodePriorite(0);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Frontignan");
        $ville->setLatitude(43.444815);
        $ville->setLongitude(3.755999);
        $ville->setCodePriorite(0);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Balaruc");
        $ville->setLatitude(43.442598);
        $ville->setLongitude(3.679241);
        $ville->setCodePriorite(0);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Mèze");
        $ville->setLatitude(43.425594);
        $ville->setLongitude(3.606834);
        $ville->setCodePriorite(0);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Bouzigues");
        $ville->setLatitude(43.449477);
        $ville->setLongitude(3.654138);
        $ville->setCodePriorite(0);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Fabrègues");
        $ville->setLatitude(43.549831);
        $ville->setLongitude(3.778935);
        $ville->setCodePriorite(0);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Cournonterral");
        $ville->setLatitude(43.558067);
        $ville->setLongitude(3.719578);
        $ville->setCodePriorite(0);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Mauguio");
        $ville->setLatitude(43.615441);
        $ville->setLongitude(4.010165);
        $ville->setCodePriorite(0);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Lattes");
        $ville->setLatitude(43.567296);
        $ville->setLongitude(3.896473);
        $ville->setCodePriorite(0);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Lodève");
        $ville->setLatitude(43.733660);
        $ville->setLongitude(3.313975);
        $ville->setCodePriorite(0);
        $list[] = $ville;
         
        $ville = new Ville();
        $ville->setNom("Canet");
        $ville->setLatitude(42.706091);
        $ville->setLongitude(3.009898);
        $ville->setCodePriorite(0);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Saint André de Sangonis");
        $ville->setLatitude(43.652984);
        $ville->setLongitude(3.508645);
        $ville->setCodePriorite(1);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Nébian");
        $ville->setLatitude(43.606614);
        $ville->setLongitude(3.430843);
        $ville->setCodePriorite(1);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Ceyras");
        $ville->setLatitude(43.643617);
        $ville->setLongitude(3.458618);
        $ville->setCodePriorite(1);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Saint Félix de Lodez");
        $ville->setLatitude(43.662971);
        $ville->setLongitude(3.460779);
        $ville->setCodePriorite(1);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Jonquières");
        $ville->setLatitude(43.676);
        $ville->setLongitude(3.476);
        $ville->setCodePriorite(1);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Aniane");
        $ville->setLatitude(43.6833);
        $ville->setLongitude(3.5833);
        $ville->setCodePriorite(1);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Murviel les Montpellier");
        $ville->setLatitude(43.6167);
        $ville->setLongitude(3.7333);
        $ville->setCodePriorite(0);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("La Boissière");
        $ville->setLatitude(43.663784);
        $ville->setLongitude(3.644807);
        $ville->setCodePriorite(0);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Saint Paul et Valmalle");
        $ville->setLatitude(43.6333);
        $ville->setLongitude(3.6667);
        $ville->setCodePriorite(0);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Béziers");
        $ville->setLatitude(43.344233);
        $ville->setLongitude(3.215795);
        $ville->setCodePriorite(1);
        $list[] = $ville;
        
        $ville = new Ville();
        $ville->setNom("Pézénas");
        $ville->setLatitude(43.461531);
        $ville->setLongitude(3.42319299);
        $ville->setCodePriorite(1);
        $list[] = $ville;
        
        
        foreach ($list as $ville) 
        {
            $manager->persist($ville);
        }
        
        
        $manager->flush();
    }
}