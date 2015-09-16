<?php

namespace OC\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ForumController extends Controller
{
    public function indexAction()
    {
        $this->get('session')->getFlashBag()->add("notice","Info: Rubrique 'Forum' en cours de développement");
        return $this->redirect($this->generateUrl('oc_core_homepage'));
    }
}
