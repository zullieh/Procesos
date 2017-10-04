<?php

namespace IcBackendBundle\Controller;

use IcBackendBundle\Entity\IcUsuario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Icusuario controller.
 *
 * @Route("icusuario")
 */
class IcUsuarioController extends Controller
{
    /**
     * Lists all icUsuario entities.
     *
     * @Route("/", name="icusuario_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $icUsuarios = $em->getRepository('IcBackendBundle:IcUsuario')->findAll();

        return $this->render('IcBackendBundle:icusuario:index.html.twig', array(
            'icUsuarios' => $icUsuarios,
        ));
    }

    /**
     * Creates a new icUsuario entity.
     *
     * @Route("/new", name="icusuario_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $icUsuario = new Icusuario();
        $form = $this->createForm('IcBackendBundle\Form\IcUsuarioType', $icUsuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($icUsuario);
            $em->flush();

            return $this->redirectToRoute('icusuario_show', array('idUsuario' => $icUsuario->getIdusuario()));
        }

        return $this->render('IcBackendBundle:icusuario:new.html.twig', array(
            'icUsuario' => $icUsuario,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a icUsuario entity.
     *
     * @Route("/{idUsuario}", name="icusuario_show")
     * @Method("GET")
     */
    public function showAction(IcUsuario $icUsuario)
    {
        $deleteForm = $this->createDeleteForm($icUsuario);

        return $this->render('IcBackendBundle:icusuario:show.html.twig', array(
            'icUsuario' => $icUsuario,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing icUsuario entity.
     *
     * @Route("/{idUsuario}/edit", name="icusuario_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, IcUsuario $icUsuario)
    {
        $deleteForm = $this->createDeleteForm($icUsuario);
        $editForm = $this->createForm('IcBackendBundle\Form\IcUsuarioType', $icUsuario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('icusuario_edit', array('idUsuario' => $icUsuario->getIdusuario()));
        }

        return $this->render('IcBackendBundle:icusuario:edit.html.twig', array(
            'icUsuario' => $icUsuario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a icUsuario entity.
     *
     * @Route("/{idUsuario}", name="icusuario_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, IcUsuario $icUsuario)
    {
        $form = $this->createDeleteForm($icUsuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($icUsuario);
            $em->flush();
        }

        return $this->redirectToRoute('icusuario_index');
    }

    /**
     * Creates a form to delete a icUsuario entity.
     *
     * @param IcUsuario $icUsuario The icUsuario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(IcUsuario $icUsuario)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('icusuario_delete', array('idUsuario' => $icUsuario->getIdusuario())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
