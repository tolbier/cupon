<?php

// src/AppBundle/Controller/DefaultController.php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    /**
     * @Route("/", name="portada")
     */
    public function portadaAction() {
        $em = $this->getDoctrine()->getManager();
        $oferta = $em->getRepository('AppBundle:Oferta')->findOneBy(array(
            'ciudad' => 1,
            'fechaPublicacion' => (new \DateTime('today'))->setTime(23,59,59)
        ));

        return $this->render('portada.html.twig', array(
                    'oferta' => $oferta
        ));
    }

    /**
     * @Route(
     * "/sitio/{nombrePagina}/",
     * name="pagina",
     * requirements={ "nombrePagina"="ayuda|privacidad|sobre_nosotros" },
     * )
     */
    public function paginaAction($nombrePagina = 'ayuda') {
        return $this->render('sitio/' . $nombrePagina . '.html.twig');
    }

}
