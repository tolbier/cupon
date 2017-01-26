<?php
// src/AppBundle/Entity/Venta.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Venta {
	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $fecha;
	/**
	 * @ORM\Id
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Oferta")
	 */
	protected $oferta;
	/**
	 * @ORM\Id
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Usuario")
	 */
	protected $usuario;
	public function setFecha($fecha) {
		$this->fecha = $fecha;
	}
	public function getFecha() {
		return $this->fecha;
	}
	public function setOferta(Oferta $oferta) {
		$this->oferta = $oferta;
	}
	public function getOferta():Oferta {
		return $this->oferta;
	}
	public function setUsuario(Usuario $usuario) {
		$this->usuario = $usuario;
	}
	public function getUsuario() {
		return $this->usuario;
	}
}