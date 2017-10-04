<?php

namespace IcFrontendBundle\Controller;

use IcFrontendBundle\Entity\IcRequisicionDeCompra;
use IcFrontendBundle\Entity\IcUsuario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Icrequisiciondecompra controller.
 *
 * @Route("icrequisiciondecompra")
 */
class IcRequisicionDeCompraController extends Controller
{
    /**
     * Lists all icRequisicionDeCompra entities.
     *
     * @Route("/", name="icrequisiciondecompra_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $icRequisicionDeCompras = $em->getRepository('IcFrontendBundle:IcRequisicionDeCompra')->findAll();

        return $this->render('IcFrontendBundle:icrequisiciondecompra:index.html.twig', array(
            'icRequisicionDeCompras' => $icRequisicionDeCompras,
        ));
    }

    /**
     * Creates a new icRequisicionDeCompra entity.
     *
     * @Route("/new", name="icrequisiciondecompra_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $icRequisicionDeCompra = new Icrequisiciondecompra();
        $em = $this->getDoctrine()->getManager();


        $u = $em->getRepository('IcFrontendBundle:IcUsuario')->findOneByIdUsuario(2);


        $icRequisicionDeCompra->setFolioRequisicion(1);
        $icRequisicionDeCompra->setStatus('PENDIENTE');
        $icRequisicionDeCompra->setNumeroEmpleado(1);
        $icRequisicionDeCompra->setIdUsuarioSolicitante($u);
        $form = $this->createForm('IcFrontendBundle\Form\IcRequisicionDeCompraType', $icRequisicionDeCompra);


        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();


            $em->persist($icRequisicionDeCompra);
            $em->flush();

            return $this->redirectToRoute('icrequisiciondecompra_show', array('idRequisicionDeCompra' => $icRequisicionDeCompra->getIdrequisiciondecompra()));
        }

        return $this->render('IcFrontendBundle:icrequisiciondecompra:new.html.twig', array(
            'icRequisicionDeCompra' => $icRequisicionDeCompra,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a icRequisicionDeCompra entity.
     *
     * @Route("/{idRequisicionDeCompra}", name="icrequisiciondecompra_show")
     * @Method("GET")
     */
    public function showAction(IcRequisicionDeCompra $icRequisicionDeCompra)
    {
        $deleteForm = $this->createDeleteForm($icRequisicionDeCompra);

        return $this->render('icrequisiciondecompra/show.html.twig', array(
            'icRequisicionDeCompra' => $icRequisicionDeCompra,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing icRequisicionDeCompra entity.
     *
     * @Route("/{idRequisicionDeCompra}/edit", name="icrequisiciondecompra_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, IcRequisicionDeCompra $icRequisicionDeCompra)
    {
        $deleteForm = $this->createDeleteForm($icRequisicionDeCompra);
        $editForm = $this->createForm('IcFrontendBundle\Form\IcRequisicionDeCompraType', $icRequisicionDeCompra);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('icrequisiciondecompra_edit', array('idRequisicionDeCompra' => $icRequisicionDeCompra->getIdrequisiciondecompra()));
        }

        return $this->render('icrequisiciondecompra/edit.html.twig', array(
            'icRequisicionDeCompra' => $icRequisicionDeCompra,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a icRequisicionDeCompra entity.
     *
     * @Route("/{idRequisicionDeCompra}", name="icrequisiciondecompra_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, IcRequisicionDeCompra $icRequisicionDeCompra)
    {
        $form = $this->createDeleteForm($icRequisicionDeCompra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($icRequisicionDeCompra);
            $em->flush();
        }

        return $this->redirectToRoute('icrequisiciondecompra_index');
    }

    /**
     * Creates a form to delete a icRequisicionDeCompra entity.
     *
     * @param IcRequisicionDeCompra $icRequisicionDeCompra The icRequisicionDeCompra entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(IcRequisicionDeCompra $icRequisicionDeCompra)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('icrequisiciondecompra_delete', array('idRequisicionDeCompra' => $icRequisicionDeCompra->getIdrequisiciondecompra())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
