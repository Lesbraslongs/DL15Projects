<?php

namespace ConcertBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ConcertBundle\Entity\Place;
use ConcertBundle\Entity\Concert;
use ConcertBundle\Entity\Band;
use Symfony\Component\HttpFoundation\Request;

class BandController extends Controller
{
    /**
     * @Route("/bands/")
     */
    public function indexAction()
    {
        //$em = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository("ConcertBundle:Band");
        $query = $repo->createQueryBuilder('b')->getQuery();
        
        $band = $query->getResult();
        return $this->render('ConcertBundle:Band:index.html.twig', array("band" => $band));
    }

    /**
     * @Route("/bands/del/{id}")
     */
    public function deleteAction($id,Request $req)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('ConcertBundle:Band');
        
        // On récupère le band grâce à l'id passé en paramètre
        $band = $repo->find($id);
        if (!$band) {
            throw $this->createNotFoundException('Pas de groupe n°'.$id);
        }
        
        $req->query->get('id');
        
        if($req->isMethod('GET')){
            // On supprime le groupe
            $em->remove($band);
            $em->flush();  
        }
        
        
        // Redirection vers la liste des salles
        return $this->redirect($this->generateUrl('concert_band_index')); 
    }

    /**
     * @Route("/bands/add")
     */
    public function addAction(Request $req)
    {
        $band = new Band();
        
        $formBuilder = $this->createFormBuilder($band);
        
        $formBuilder
                ->add('name','text')
                ->add('Ajouter','submit')
                ->setAction($this->generateUrl("concert_band_add"));
                
        $form = $formBuilder->getForm();
        $form->handleRequest($req);
        //$req->request->get($form);
        
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($band);
            $em->flush();
            return $this->redirect($this->generateUrl('concert_band_index'));
        }
        
        return $this->render('ConcertBundle:Band:add.html.twig', array("form" => $form->createView()));
    }

    /**
     * @Route("/bands/{id}")
     */
    public function planningAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository("ConcertBundle:Band");
        $band = $repo->find($id);
        return $this->render('ConcertBundle:Band:planning.html.twig', array("band" => $band));
    }

}
