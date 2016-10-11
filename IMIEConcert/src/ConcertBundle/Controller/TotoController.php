<?php

namespace ConcertBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ConcertBundle\Entity\Toto;
use ConcertBundle\Form\TotoType;

/**
 * Toto controller.
 *
 * @Route("/toto/")
 */
class TotoController extends Controller
{
    /**
     * Lists all Toto entities.
     *
     * @Route("/", name="toto_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $totos = $em->getRepository('ConcertBundle:Toto')->findAll();

        return $this->render('toto/index.html.twig', array(
            'totos' => $totos,
        ));
    }

    /**
     * Creates a new Toto entity.
     *
     * @Route("/new", name="toto_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $toto = new Toto();
        $form = $this->createForm('ConcertBundle\Form\TotoType', $toto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($toto);
            $em->flush();

            return $this->redirectToRoute('toto_show', array('id' => $toto->getId()));
        }

        return $this->render('toto/new.html.twig', array(
            'toto' => $toto,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Toto entity.
     *
     * @Route("/{id}", name="toto_show")
     * @Method("GET")
     */
    public function showAction(Toto $toto)
    {
        $deleteForm = $this->createDeleteForm($toto);

        return $this->render('toto/show.html.twig', array(
            'toto' => $toto,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Toto entity.
     *
     * @Route("/{id}/edit", name="toto_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Toto $toto)
    {
        $deleteForm = $this->createDeleteForm($toto);
        $editForm = $this->createForm('ConcertBundle\Form\TotoType', $toto);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($toto);
            $em->flush();

            return $this->redirectToRoute('toto_edit', array('id' => $toto->getId()));
        }

        return $this->render('toto/edit.html.twig', array(
            'toto' => $toto,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Toto entity.
     *
     * @Route("/{id}", name="toto_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Toto $toto)
    {
        $form = $this->createDeleteForm($toto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($toto);
            $em->flush();
        }

        return $this->redirectToRoute('toto_index');
    }

    /**
     * Creates a form to delete a Toto entity.
     *
     * @param Toto $toto The Toto entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Toto $toto)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('toto_delete', array('id' => $toto->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
