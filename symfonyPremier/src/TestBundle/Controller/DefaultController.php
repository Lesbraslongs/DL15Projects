<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    public function addAction($id)
    {
    	return new Response ("numero identifiant ajouté : " . $id);
        //return $this->render('TestBundle:Default:index.html.twig');
    }

    public function indexAction($id)
    {
    	return new Response ("détail numero identifiant : " . $id);
        //return $this->render('TestBundle:Default:index.html.twig');
    }

    public function editAction($id)
    {
    	return new Response ("numero identifiant modifié : " . $id);
        //return $this->render('TestBundle:Default:index.html.twig');
    }

    public function deleteAction($id)
    {
    	return new Response ("numero identifiant supprimé : " . $id);
        //return $this->render('TestBundle:Default:index.html.twig');
    }
}
