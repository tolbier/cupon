<?php
// src/AppBundle/Controller/DefaultController.php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class DefaultController extends Controller
{
	/**
	 * @Route("/ayuda")
	 */
	public function ayudaAction()
	{
		return $this->render('sitio/ayuda.html.twig');
	}
}