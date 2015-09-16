<?php

namespace OC\PlatformBundle\Purger ;

class OCPurger{
    public function purge($em,$days){
        $advert=array();
        //Récupération des annonces sans candidature et non modifiées depuis X jours
        $adverts=$em->getRepository('OCPlatformBundle:Advert')->findExpiratedAdvert($days);
        //Delete sur chacune de ces annonces
        foreach($adverts as $advert){
            $em->remove($advert);
        }
        //Exécution de la requête
        $em->flush();
    }
    
}
