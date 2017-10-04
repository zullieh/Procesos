<?php

namespace IcBackendBundle\Controller;

use IcBackendBundle\Entity\IcGerencia;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Icgerencia controller.
 *
 * @Route("icgerencia")
 */
class IcGerenciaController extends Controller
{
    /**
     * Lists all Icgerencia entities.
     *
     * @Route("/", name="icgerencia_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $icGerencias = $em->getRepository('IcBackendBundle:IcGerencia')->findAll();

        return $this->render('IcBackendBundle:icgerencia:index.html.twig', array(
            'icGerencias' => $icGerencias,
        ));
    }

    /**
     * Creates a new Icgerencia entity.
     *
     * @Route("/new", name="icgerencia_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $IcGerencia = new Icgerencia();
        $form = $this->createForm('IcBackendBundle\Form\IcGerenciaType', $IcGerencia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($IcGerencia);
            $em->flush();

            return $this->redirectToRoute('icgerencia_show', array('idGerencia' => $IcGerencia->getIdgerencia()));
        }

        return $this->render('IcBackendBundle:icgerencia:new.html.twig', array(
            'IcGerencia' => $IcGerencia,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Icgerencia entity.
     *
     * @Route("/{idGerencia}", name="icgerencia_show")
     * @Method("GET")
     */
    public function showAction(IcGerencia $IcGerencia)
    {
        $deleteForm = $this->createDeleteForm($IcGerencia);

        return $this->render('IcBackendBundle:icgerencia:show.html.twig', array(
            'Icgerencia' => $IcGerencia,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing IcGerencia entity.
     *
     * @Route("/{idGerencia}/edit", name="icgerencia_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, IcGerencia $IcGerencia)
    {
        $deleteForm = $this->createDeleteForm($IcGerencia);
        $editForm = $this->createForm('IcBackendBundle\Form\IcGerenciaType', $IcGerencia);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('icgerencia_edit', array('idGerencia' => $IcGerencia->getIdgerencia()));
        }

        return $this->render('IcBackendBundle:icgerencia:edit.html.twig', array(
            'Icgerencia' => $IcGerencia,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Icgerencia entity.
     *
     * @Route("/{idGerencia}", name="icgerencia_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, IcGerencia $IcGerencia)
    {
        $form = $this->createDeleteForm($IcGerencia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($IcGerencia);
            $em->flush();
        }

        return $this->redirectToRoute('icgerencia_index');
    }

    /**
     * Creates a form to delete a IcGerencia entity.
     *
     * @param IcGerencia $IcGerencia The IcGerencia entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(IcGerencia $IcGerencia)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('icgerencia_delete', array('idGerencia' => $IcGerencia->getIdgerencia())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
