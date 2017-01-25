<?php
// src/AppBundle/Controller/DefaultController.php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
class DefaultController
{
	/**
	 * @Route("/ayuda")
	 */
	public function ayudaAction()
	{
		return new Response('Página de ayuda');
	}
}