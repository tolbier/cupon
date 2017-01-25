<?php
// src/AppBundle/Controller/DefaultController.php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class DefaultController extends Controller
{
	/**
	 * @Route(
	 * "/sitio/{nombrePagina}",
	 * name="pagina",
	 * requirements={ "nombrePagina"="ayuda|privacidad|sobre_nosotros" },
	 * )
	 */
	public function paginaAction($nombrePagina= 'ayuda')
	{
		return $this->render('sitio/'.$nombrePagina.'.html.twig');
	}
}