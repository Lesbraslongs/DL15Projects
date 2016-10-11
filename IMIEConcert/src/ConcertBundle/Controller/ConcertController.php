<?php

namespace ConcertBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ConcertBundle\Entity\Place;
use ConcertBundle\Entity\Concert;
use ConcertBundle\Entity\Band;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class ConcertController extends Controller
{
    /**
     * @Route("/concerts/add")
     */
    public function addAction(Request $req)
    {
        $concert = new Concert();
        
        $formBuilder = $this->createFormBuilder($concert);
        
        $formBuilder
                ->add('salary', TextType::class)
                ->add('startingDate', DateTimeType::class, array('format' => 'dd MM yyyy HH:mm', 'years' => array('2016','2017','2018')))
                ->add('endingDate', DateTimeType::class, array('format' => 'dd MM yyyy HH:mm', 'years' => array('2016','2017','2018')))
                ->add('cancel', HiddenType::class, array('data' => 0))
                ->add('band', EntityType::class, array('class' => 'ConcertBundle:Band', 'choice_label' => 'name'))
                ->add('place', EntityType::class, array('class' => 'ConcertBundle:Place', 'choice_label' => 'name'))
                ->add('Ajouter','submit')
                ->setAction($this->generateUrl("concert_concert_add"));
                
        $form = $formBuilder->getForm();
        $form->handleRequest($req);
        //$req->request->get($form);
        
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($concert);
            $em->flush();
            return $this->redirect($this->generateUrl('concert_concert_index'));
        }
        
        return $this->render('ConcertBundle:Concert:add.html.twig', array("form" => $form->createView()));
    }

    /**
     * @Route("/concerts")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository("ConcertBundle:Concert");
        $concert = $repo->findAll();
        
        return $this->render('ConcertBundle:Concert:index.html.twig', array("concert" => $concert));
    }

    /**
     * @Route("/concerts/cancel/{id}")
     */
    public function cancelAction($id, Request $req)
    {
        //$em = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository("ConcertBundle:Concert");
        
        if( $req->get('cancel') == 0 ) {
            $rep->set('cancel') = 1;
        } elseif ($req->get('cancel') == 1) {
            $rep->set('cancel') = 0;
        }
        
        // Redirection vers la liste des salles
        return $this->redirect($this->generateUrl('concert_concert_index')); 
    }

    /**
     * @Route("/concerts/active/{id}")
     */
    public function activeAction($id)
    {
        return $this->render('ConcertBundle:Concert:active.html.twig', array());
    }

    /**
     * @Route("/concerts/del/{id}")
     */
    public function deleteAction($id)
    {
        return $this->render('ConcertBundle:Concert:delete.html.twig', array());
    }

}
