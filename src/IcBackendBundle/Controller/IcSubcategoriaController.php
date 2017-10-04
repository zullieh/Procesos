<?php

namespace IcBackendBundle\Controller;

use IcBackendBundle\Entity\IcSubcategoria;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Icsubcategorium controller.
 *
 * @Route("icsubcategoria")
 */
class IcSubcategoriaController extends Controller
{
    /**
     * Lists all icSubcategorium entities.
     *
     * @Route("/", name="icsubcategoria_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $icSubcategorias = $em->getRepository('IcBackendBundle:IcSubcategoria')->findAll();

        return $this->render('IcBackendBundle:icsubcategoria:index.html.twig', array(
            'icSubcategorias' => $icSubcategorias,
        ));
    }

    /**
     * Creates a new icSubcategoria entity.
     *
     * @Route("/new", name="icsubcategoria_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $icSubcategoria = new Icsubcategoria();
        $form = $this->createForm('IcBackendBundle\Form\IcSubcategoriaType', $icSubcategoria);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($icSubcategoria);
            $em->flush();

            return $this->redirectToRoute('icsubcategoria_show', array('idSubcategoria' => $icSubcategoria->getIdsubcategoria()));
        }

        return $this->render('IcBackendBundle:icsubcategoria:new.html.twig', array(
            'icSubcategoria' => $icSubcategoria,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a icSubcategoria entity.
     *
     * @Route("/{idSubcategoria}", name="icsubcategoria_show")
     * @Method("GET")
     */
    public function showAction(IcSubcategoria $icSubcategoria)
    {
        $deleteForm = $this->createDeleteForm($icSubcategoria);

        return $this->render('IcBackendBundle:icsubcategoria:show.html.twig', array(
            'icSubcategoria' => $icSubcategoria,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing icSubcategoria entity.
     *
     * @Route("/{idSubcategoria}/edit", name="icsubcategoria_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, IcSubcategoria $icSubcategoria)
    {
        $deleteForm = $this->createDeleteForm($icSubcategoria);
        $editForm = $this->createForm('IcBackendBundle\Form\IcSubcategoriaType', $icSubcategoria);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('icsubcategoria_edit', array('idSubcategoria' => $icSubcategoria->getIdsubcategoria()));
        }

        return $this->render('IcBackendBundle:icsubcategoria:edit.html.twig', array(
            'icSubcategoria' => $icSubcategoria,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a icSubcategoria entity.
     *
     * @Route("/{idSubcategoria}", name="icsubcategoria_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, IcSubcategoria $icSubcategoria)
    {
        $form = $this->createDeleteForm($icSubcategoria);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($icSubcategoria);
            $em->flush();
        }

        return $this->redirectToRoute('icsubcategoria_index');
    }

    /**
     * Creates a form to delete a icSubcategoria entity.
     *
     * @param IcSubcategoria $icSubcategoria The icSubcategoria entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(IcSubcategoria $icSubcategoria)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('icsubcategoria_delete', array('idSubcategoria' => $icSubcategoria->getIdsubcategoria())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
