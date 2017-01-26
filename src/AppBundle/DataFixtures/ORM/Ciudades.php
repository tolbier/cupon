<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Ciudad;

class Ciudades implements FixtureInterface {
	public function load(ObjectManager $manager) {
		$ciudades = array(
				array('nombre' => 'Madrid', 'slug' => 'madrid'),
				array('nombre' => 'Barcelona', 'slug' => 'barcelona'),
				// ...
		);
		foreach ($ciudades as $ciudad) {
			$entidad = new Ciudad();
			$entidad->setNombre($ciudad['nombre']);

			$manager->persist($entidad);
		}
		$manager->flush();
	}
}