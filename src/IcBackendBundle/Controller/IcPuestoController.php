<?php

namespace IcBackendBundle\Controller;

use IcBackendBundle\Entity\IcPuesto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Icpuesto controller.
 *
 * @Route("icpuesto")
 */
class IcPuestoController extends Controller
{
    /**
     * Lists all icPuesto entities.
     *
     * @Route("/", name="icpuesto_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $icPuestos = $em->getRepository('IcBackendBundle:IcPuesto')->findAll();

        return $this->render('IcBackendBundle:icpuesto:index.html.twig', array(
            'icPuestos' => $icPuestos,
        ));
    }

    /**
     * Creates a new icPuesto entity.
     *
     * @Route("/new", name="icpuesto_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $icPuesto = new Icpuesto();
        $form = $this->createForm('IcBackendBundle\Form\IcPuestoType', $icPuesto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($icPuesto);
            $em->flush();

            return $this->redirectToRoute('icpuesto_show', array('idPuesto' => $icPuesto->getIdpuesto()));
        }

        return $this->render('IcBackendBundle:icpuesto:new.html.twig', array(
            'icPuesto' => $icPuesto,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a icPuesto entity.
     *
     * @Route("/{idPuesto}", name="icpuesto_show")
     * @Method("GET")
     */
    public function showAction(IcPuesto $icPuesto)
    {
        $deleteForm = $this->createDeleteForm($icPuesto);

        return $this->render('IcBackendBundle:icpuesto:show.html.twig', array(
            'icPuesto' => $icPuesto,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing icPuesto entity.
     *
     * @Route("/{idPuesto}/edit", name="icpuesto_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, IcPuesto $icPuesto)
    {
        $deleteForm = $this->createDeleteForm($icPuesto);
        $editForm = $this->createForm('IcBackendBundle\Form\IcPuestoType', $icPuesto);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('icpuesto_edit', array('idPuesto' => $icPuesto->getIdpuesto()));
        }

        return $this->render('IcBackendBundle:icpuesto:edit.html.twig', array(
            'icPuesto' => $icPuesto,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a icPuesto entity.
     *
     * @Route("/{idPuesto}", name="icpuesto_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, IcPuesto $icPuesto)
    {
        $form = $this->createDeleteForm($icPuesto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($icPuesto);
            $em->flush();
        }

        return $this->redirectToRoute('icpuesto_index');
    }

    /**
     * Creates a form to delete a icPuesto entity.
     *
     * @param IcPuesto $icPuesto The icPuesto entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(IcPuesto $icPuesto)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('icpuesto_delete', array('idPuesto' => $icPuesto->getIdpuesto())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
