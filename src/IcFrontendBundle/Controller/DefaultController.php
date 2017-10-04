<?php

namespace IcFrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('IcFrontendBundle:Default:index.html.twig');
    }

    public function tipoControlAction()
    {
        return $this->render('IcFrontendBundle:Default:tipocontrol.html.twig');
    }

    public function tipoSolicitudAction()
    {
        return $this->render('IcFrontendBundle:Default:tiposolicitud.html.twig');
    }

    public function menuAction()
    {
        return $this->render('IcFrontendBundle:Default:menu.html.twig');
    }
}
