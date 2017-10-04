<?php

namespace IcBackendBundle\Controller;

use IcBackendBundle\Entity\IcArea;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Icarea controller.
 *
 * @Route("icarea")
 */
class IcAreaController extends Controller
{
    /**
     * Lists all icArea entities.
     *
     * @Route("/", name="icarea_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        //$this->get('session')->getFlashBag()->add('success','La Noticia ha sido publicada exitosamente.');

        $em = $this->getDoctrine()->getManager();

        $icAreas = $em->getRepository('IcBackendBundle:IcArea')->findAll();

        return $this->render('IcBackendBundle:icarea:index.html.twig', array(
            'icAreas' => $icAreas,
        ));
    }

    /**
     * Creates a new icArea entity.
     *
     * @Route("/new", name="icarea_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $icArea = new Icarea();
        $form = $this->createForm('IcBackendBundle\Form\IcAreaType', $icArea);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($icArea);
            $em->flush();

            return $this->redirectToRoute('icarea_show', array('idArea' => $icArea->getIdarea()));
        }

        return $this->render('IcBackendBundle:icarea:new.html.twig', array(
            'icArea' => $icArea,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a icArea entity.
     *
     * @Route("/{idArea}", name="icarea_show")
     * @Method("GET")
     */
    public function showAction(IcArea $icArea)
    {
        $deleteForm = $this->createDeleteForm($icArea);

        return $this->render('IcBackendBundle:icarea:show.html.twig', array(
            'icArea' => $icArea,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing icArea entity.
     *
     * @Route("/{idArea}/edit", name="icarea_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, IcArea $icArea)
    {
        $deleteForm = $this->createDeleteForm($icArea);
        $editForm = $this->createForm('IcBackendBundle\Form\IcAreaType', $icArea);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('icarea_edit', array('idArea' => $icArea->getIdarea()));
        }

        return $this->render('IcBackendBundle:icarea:edit.html.twig', array(
            'icArea' => $icArea,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a icArea entity.
     *
     * @Route("/{idArea}", name="icarea_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, IcArea $icArea)
    {
        $form = $this->createDeleteForm($icArea);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($icArea);
            $em->flush();
        }

        return $this->redirectToRoute('icarea_index');
    }

    /**
     * Creates a form to delete a icArea entity.
     *
     * @param IcArea $icArea The icArea entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(IcArea $icArea)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('icarea_delete', array('idArea' => $icArea->getIdarea())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
