<?php

namespace IcBackendBundle\Controller;

use IcBackendBundle\Entity\IcDireccion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Icdireccion controller.
 *
 * @Route("icdireccion")
 */
class IcDireccionController extends Controller
{
    /**
     * Lists all icDireccion entities.
     *
     * @Route("/", name="icdireccion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $icDireccions = $em->getRepository('IcBackendBundle:IcDireccion')->findAll();

        return $this->render('IcBackendBundle:icdireccion:index.html.twig', array(
            'icDireccions' => $icDireccions,
        ));
    }

    /**
     * Creates a new icDireccion entity.
     *
     * @Route("/new", name="icdireccion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $icDireccion = new Icdireccion();
        $form = $this->createForm('IcBackendBundle\Form\IcDireccionType', $icDireccion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($icDireccion);
            $em->flush();

            return $this->redirectToRoute('icdireccion_show', array('idDireccion' => $icDireccion->getIddireccion()));
        }

        return $this->render('IcBackendBundle:icdireccion:new.html.twig', array(
            'icDireccion' => $icDireccion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a icDireccion entity.
     *
     * @Route("/{idDireccion}", name="icdireccion_show")
     * @Method("GET")
     */
    public function showAction(IcDireccion $icDireccion)
    {
        $deleteForm = $this->createDeleteForm($icDireccion);

        return $this->render('IcBackendBundle:icdireccion:show.html.twig', array(
            'icDireccion' => $icDireccion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing icDireccion entity.
     *
     * @Route("/{idDireccion}/edit", name="icdireccion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, IcDireccion $icDireccion)
    {
        $deleteForm = $this->createDeleteForm($icDireccion);
        $editForm = $this->createForm('IcBackendBundle\Form\IcDireccionType', $icDireccion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('icdireccion_edit', array('idDireccion' => $icDireccion->getIddireccion()));
        }

        return $this->render('IcBackendBundle:icdireccion:edit.html.twig', array(
            'icDireccion' => $icDireccion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a icDireccion entity.
     *
     * @Route("/{idDireccion}", name="icdireccion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, IcDireccion $icDireccion)
    {
        $form = $this->createDeleteForm($icDireccion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($icDireccion);
            $em->flush();
        }

        return $this->redirectToRoute('icdireccion_index');
    }

    /**
     * Creates a form to delete a icDireccion entity.
     *
     * @param IcDireccion $icDireccion The icDireccion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(IcDireccion $icDireccion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('icdireccion_delete', array('idDireccion' => $icDireccion->getIddireccion())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
