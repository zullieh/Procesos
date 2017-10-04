<?php

namespace IcBackendBundle\Controller;

use IcBackendBundle\Entity\IcCentroTrabajo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Iccentrotrabajo controller.
 *
 * @Route("iccentrotrabajo")
 */
class IcCentroTrabajoController extends Controller
{
    /**
     * Lists all icCentroTrabajo entities.
     *
     * @Route("/", name="iccentrotrabajo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $icCentroTrabajos = $em->getRepository('IcBackendBundle:IcCentroTrabajo')->findAll();

        return $this->render('IcBackendBundle:iccentrotrabajo:index.html.twig', array(
            'icCentroTrabajos' => $icCentroTrabajos,
        ));
    }

    /**
     * Creates a new icCentroTrabajo entity.
     *
     * @Route("/new", name="iccentrotrabajo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $icCentroTrabajo = new Iccentrotrabajo();
        $form = $this->createForm('IcBackendBundle\Form\IcCentroTrabajoType', $icCentroTrabajo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($icCentroTrabajo);
            $em->flush();

            return $this->redirectToRoute('iccentrotrabajo_show', array('idCentro' => $icCentroTrabajo->getIdcentro()));
        }

        return $this->render('IcBackendBundle:iccentrotrabajo:new.html.twig', array(
            'icCentroTrabajo' => $icCentroTrabajo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a icCentroTrabajo entity.
     *
     * @Route("/{idCentro}", name="iccentrotrabajo_show")
     * @Method("GET")
     */
    public function showAction(IcCentroTrabajo $icCentroTrabajo)
    {
        $deleteForm = $this->createDeleteForm($icCentroTrabajo);

        return $this->render('IcBackendBundle:iccentrotrabajo:show.html.twig', array(
            'icCentroTrabajo' => $icCentroTrabajo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing icCentroTrabajo entity.
     *
     * @Route("/{idCentro}/edit", name="iccentrotrabajo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, IcCentroTrabajo $icCentroTrabajo)
    {
        $deleteForm = $this->createDeleteForm($icCentroTrabajo);
        $editForm = $this->createForm('IcBackendBundle\Form\IcCentroTrabajoType', $icCentroTrabajo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('iccentrotrabajo_edit', array('idCentro' => $icCentroTrabajo->getIdcentro()));
        }

        return $this->render('IcBackendBundle:iccentrotrabajo:edit.html.twig', array(
            'icCentroTrabajo' => $icCentroTrabajo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a icCentroTrabajo entity.
     *
     * @Route("/{idCentro}", name="iccentrotrabajo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, IcCentroTrabajo $icCentroTrabajo)
    {
        $form = $this->createDeleteForm($icCentroTrabajo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($icCentroTrabajo);
            $em->flush();
        }

        return $this->redirectToRoute('iccentrotrabajo_index');
    }

    /**
     * Creates a form to delete a icCentroTrabajo entity.
     *
     * @param IcCentroTrabajo $icCentroTrabajo The icCentroTrabajo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(IcCentroTrabajo $icCentroTrabajo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('iccentrotrabajo_delete', array('idCentro' => $icCentroTrabajo->getIdcentro())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
