<?php
// src/AppBundle/Controller/DefaultController.php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class DefaultController extends Controller
{
	/**
	 * @Route("/sitio/{nombrePagina}")
	 */
	public function paginaAction($nombrePagina)
	{
		return $this->render('sitio/'.$nombrePagina.'.html.twig');
	}
}