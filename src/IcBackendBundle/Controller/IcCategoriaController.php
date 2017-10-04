<?php

namespace IcBackendBundle\Controller;

use IcBackendBundle\Entity\IcCategoria;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Iccategorium controller.
 *
 * @Route("iccategoria")
 */
class IcCategoriaController extends Controller
{
    /**
     * Lists all icCategorium entities.
     *
     * @Route("/", name="iccategoria_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $icCategorias = $em->getRepository('IcBackendBundle:IcCategoria')->findAll();

        return $this->render('IcBackendBundle:iccategoria:index.html.twig', array(
            'icCategorias' => $icCategorias,
        ));
    }

    /**
     * Creates a new icCategoria entity.
     *
     * @Route("/new", name="iccategoria_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $icCategoria = new IcCategoria();
        $form = $this->createForm('IcBackendBundle\Form\IcCategoriaType', $icCategoria);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($icCategoria);
            $em->flush();

            return $this->redirectToRoute('iccategoria_show', array('idCategoria' => $icCategoria->getIdcategoria()));
        }

        return $this->render('IcBackendBundle:iccategoria:new.html.twig', array(
            'icCategoria' => $icCategoria,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a icCategoria entity.
     *
     * @Route("/{idCategoria}", name="iccategoria_show")
     * @Method("GET")
     */
    public function showAction(IcCategoria $icCategoria)
    {
        $deleteForm = $this->createDeleteForm($icCategoria);

        return $this->render('IcBackendBundle:iccategoria:show.html.twig', array(
            'icCategoria' => $icCategoria,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing icCategoria entity.
     *
     * @Route("/{idCategoria}/edit", name="iccategoria_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, IcCategoria $icCategoria)
    {
        $deleteForm = $this->createDeleteForm($icCategoria);
        $editForm = $this->createForm('IcBackendBundle\Form\IcCategoriaType', $icCategoria);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('iccategoria_edit', array('idCategoria' => $icCategoria->getIdcategoria()));
        }

        return $this->render('IcBackendBundle:iccategoria:edit.html.twig', array(
            'icCategoria' => $icCategoria,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a icCategoria entity.
     *
     * @Route("/{idCategoria}", name="iccategoria_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, IcCategoria $icCategoria)
    {
        $form = $this->createDeleteForm($icCategoria);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($icCategoria);
            $em->flush();
        }

        return $this->redirectToRoute('iccategoria_index');
    }

    /**
     * Creates a form to delete a icCategoria entity.
     *
     * @param IcCategoria $icCategoria The icCategoria entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(IcCategoria $icCategoria)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('iccategoria_delete', array('idCategoria' => $icCategoria->getIdcategoria())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
