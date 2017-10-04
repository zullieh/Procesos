<?php

namespace IcFrontendBundle\Controller;

use IcFrontendBundle\Entity\IcAnticipoDeGasto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Icanticipodegasto controller.
 *
 * @Route("icanticipodegasto")
 */
class IcAnticipoDeGastoController extends Controller
{
    /**
     * Lists all icAnticipoDeGasto entities.
     *
     * @Route("/", name="icanticipodegasto_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $icAnticipoDeGastos = $em->getRepository('IcFrontendBundle:IcAnticipoDeGasto')->findAll();

        return $this->render('icanticipodegasto/index.html.twig', array(
            'icAnticipoDeGastos' => $icAnticipoDeGastos,
        ));
    }

    /**
     * Creates a new icAnticipoDeGasto entity.
     *
     * @Route("/new", name="icanticipodegasto_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $icAnticipoDeGasto = new Icanticipodegasto();
        $form = $this->createForm('IcFrontendBundle\Form\IcAnticipoDeGastoType', $icAnticipoDeGasto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($icAnticipoDeGasto);
            $em->flush();

            return $this->redirectToRoute('icanticipodegasto_show', array('idAnticipoDeGasto' => $icAnticipoDeGasto->getIdanticipodegasto()));
        }

        return $this->render('icanticipodegasto/new.html.twig', array(
            'icAnticipoDeGasto' => $icAnticipoDeGasto,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a icAnticipoDeGasto entity.
     *
     * @Route("/{idAnticipoDeGasto}", name="icanticipodegasto_show")
     * @Method("GET")
     */
    public function showAction(IcAnticipoDeGasto $icAnticipoDeGasto)
    {
        $deleteForm = $this->createDeleteForm($icAnticipoDeGasto);

        return $this->render('icanticipodegasto/show.html.twig', array(
            'icAnticipoDeGasto' => $icAnticipoDeGasto,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing icAnticipoDeGasto entity.
     *
     * @Route("/{idAnticipoDeGasto}/edit", name="icanticipodegasto_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, IcAnticipoDeGasto $icAnticipoDeGasto)
    {
        $deleteForm = $this->createDeleteForm($icAnticipoDeGasto);
        $editForm = $this->createForm('IcFrontendBundle\Form\IcAnticipoDeGastoType', $icAnticipoDeGasto);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('icanticipodegasto_edit', array('idAnticipoDeGasto' => $icAnticipoDeGasto->getIdanticipodegasto()));
        }

        return $this->render('icanticipodegasto/edit.html.twig', array(
            'icAnticipoDeGasto' => $icAnticipoDeGasto,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a icAnticipoDeGasto entity.
     *
     * @Route("/{idAnticipoDeGasto}", name="icanticipodegasto_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, IcAnticipoDeGasto $icAnticipoDeGasto)
    {
        $form = $this->createDeleteForm($icAnticipoDeGasto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($icAnticipoDeGasto);
            $em->flush();
        }

        return $this->redirectToRoute('icanticipodegasto_index');
    }

    /**
     * Creates a form to delete a icAnticipoDeGasto entity.
     *
     * @param IcAnticipoDeGasto $icAnticipoDeGasto The icAnticipoDeGasto entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(IcAnticipoDeGasto $icAnticipoDeGasto)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('icanticipodegasto_delete', array('idAnticipoDeGasto' => $icAnticipoDeGasto->getIdanticipodegasto())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
