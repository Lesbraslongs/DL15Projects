<?php

namespace ConcertBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ConcertBundle\Entity\Place;
use ConcertBundle\Entity\Concert;
use ConcertBundle\Entity\Band;
use Symfony\Component\HttpFoundation\Request;

class PlaceController extends Controller
{
    /**
     * @Route("/places/")
     */
    public function indexAction()
    {
        //$em = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository("ConcertBundle:Place");
        $query = $repo->createQueryBuilder('p')
                ->orderBy("p.city", "ASC")
                ->getQuery();
        $place = $query->getResult();
        
        return $this->render('ConcertBundle:Place:index.html.twig', array("place" => $place));
    }

    /**
     * @Route("/places/del/{id}", requirements={"id" = "\d+"})
     */
    public function deleteAction($id, Request $req)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('ConcertBundle:Place');
        
        // On récupère le place grâce à l'id passé en paramètre
        $place = $repo->find($id);
        if (!$place) {
            throw $this->createNotFoundException('Pas de salle n°'.$id);
        }
        
        $req->query->get('id');
        
        if($req->isMethod('GET')){
            // On supprime la salle
            $em->remove($place);
            $em->flush();  
        }
        
        
        // Redirection vers la liste des salles
        return $this->redirect($this->generateUrl('concert_place_index'));    
        
    }

    /**
     * @Route("/places/add")
     */
    public function addAction(Request $req)
    {
        $place = new Place();
        
        $formBuilder = $this->createFormBuilder($place);
        
        $formBuilder->add('name','text')
                ->add('city','text')
                ->add('address','text')
                ->add('zipCode','text')
                ->add('phone','text')
                ->add('Ajouter','submit')
                ->setAction($this->generateUrl("concert_place_add"));
                
        $form = $formBuilder->getForm();
        $form->handleRequest($req);
        //$req->request->get($form);
        
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($place);
            $em->flush();
            return $this->redirect($this->generateUrl('concert_place_index'));
        }
        
        return $this->render('ConcertBundle:Place:add.html.twig', array("form" => $form->createView()));
    }

    /**
     * @Route("/places/{id}")
     */
    public function planningAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository("ConcertBundle:Place");
        $place = $repo->find($id);
        
        return $this->render('ConcertBundle:Place:planning.html.twig', array("place" => $place));
    }

}
