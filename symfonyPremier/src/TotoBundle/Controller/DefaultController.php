<?php

namespace TotoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
    * @Route("/test/add/{id}", requirements={"id" = "\d+"}, defaults={"id" = 1})
    */
    public function addAction($id)
    {
    	return new Response ("numero identifiant ajouté : " . $id);
    }
    
    /**
    * @Route("/test/{id}", requirements={"id" = "\d+"}, defaults={"id" = 1})
    */
    public function indexAction($id)
    {
        return $this->render('TotoBundle:Default:index.html.twig');
        //return new Response ("détail numero identifiant : " . $id);
    }
    
    /**
    * @Route("/test/edit/{id}", requirements={"id" = "\d+"}, defaults={"id" = 1})
    */
    public function editAction($id)
    {
    	return new Response ("numero identifiant modifié : " . $id);
    }
    
    /**
    * @Route("/test/del/{id}", requirements={"id" = "\d+"}, defaults={"id" = 1})
    */
    public function deleteAction($id)
    {
    	return new Response ("numero identifiant supprimé : " . $id);
    }
}
