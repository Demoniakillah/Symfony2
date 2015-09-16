<?php

namespace OC\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function indexAction(){
        
        $this->get('session')->getFlashBag()->add("notice","Info: Rubrique 'Contact' en cours de développement");
        return $this->redirect($this->generateUrl('oc_core_homepage'));
        
    }
}
