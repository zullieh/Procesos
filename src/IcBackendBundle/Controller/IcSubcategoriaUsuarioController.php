<?php

namespace IcBackendBundle\Controller;

use IcBackendBundle\Entity\IcSubcategoriaUsuario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Icsubcategoriausuario controller.
 *
 * @Route("icsubcategoriausuario")
 */
class IcSubcategoriaUsuarioController extends Controller
{
    /**
     * Lists all icSubcategoriaUsuario entities.
     *
     * @Route("/", name="icsubcategoriausuario_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $icSubcategoriaUsuarios = $em->getRepository('IcBackendBundle:IcSubcategoriaUsuario')->findAll();

        return $this->render('IcBackendBundle:icsubcategoriausuario:index.html.twig', array(
            'icSubcategoriaUsuarios' => $icSubcategoriaUsuarios,
        ));
    }

    /**
     * Creates a new icSubcategoriaUsuario entity.
     *
     * @Route("/new", name="icsubcategoriausuario_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $icSubcategoriaUsuario = new Icsubcategoriausuario();
        $form = $this->createForm('IcBackendBundle\Form\IcSubcategoriaUsuarioType', $icSubcategoriaUsuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($icSubcategoriaUsuario);
            $em->flush();

            return $this->redirectToRoute('icsubcategoriausuario_show', array('idSubcategoriaUsuario' => $icSubcategoriaUsuario->getIdsubcategoriausuario()));
        }

        return $this->render('IcBackendBundle:icsubcategoriausuario:new.html.twig', array(
            'icSubcategoriaUsuario' => $icSubcategoriaUsuario,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a icSubcategoriaUsuario entity.
     *
     * @Route("/{idSubcategoriaUsuario}", name="icsubcategoriausuario_show")
     * @Method("GET")
     */
    public function showAction(IcSubcategoriaUsuario $icSubcategoriaUsuario)
    {
        $deleteForm = $this->createDeleteForm($icSubcategoriaUsuario);

        return $this->render('IcBackendBundle:icsubcategoriausuario:show.html.twig', array(
            'icSubcategoriaUsuario' => $icSubcategoriaUsuario,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing icSubcategoriaUsuario entity.
     *
     * @Route("/{idSubcategoriaUsuario}/edit", name="icsubcategoriausuario_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, IcSubcategoriaUsuario $icSubcategoriaUsuario)
    {
        $deleteForm = $this->createDeleteForm($icSubcategoriaUsuario);
        $editForm = $this->createForm('IcBackendBundle\Form\IcSubcategoriaUsuarioType', $icSubcategoriaUsuario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('icsubcategoriausuario_edit', array('idSubcategoriaUsuario' => $icSubcategoriaUsuario->getIdsubcategoriausuario()));
        }

        return $this->render('IcBackendBundle:icsubcategoriausuario:edit.html.twig', array(
            'icSubcategoriaUsuario' => $icSubcategoriaUsuario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a icSubcategoriaUsuario entity.
     *
     * @Route("/{idSubcategoriaUsuario}", name="icsubcategoriausuario_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, IcSubcategoriaUsuario $icSubcategoriaUsuario)
    {
        $form = $this->createDeleteForm($icSubcategoriaUsuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($icSubcategoriaUsuario);
            $em->flush();
        }

        return $this->redirectToRoute('icsubcategoriausuario_index');
    }

    /**
     * Creates a form to delete a icSubcategoriaUsuario entity.
     *
     * @param IcSubcategoriaUsuario $icSubcategoriaUsuario The icSubcategoriaUsuario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(IcSubcategoriaUsuario $icSubcategoriaUsuario)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('icsubcategoriausuario_delete', array('idSubcategoriaUsuario' => $icSubcategoriaUsuario->getIdsubcategoriausuario())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
