<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Util\Slugger;
/**
 * Oferta
 *
 * @ORM\Table(name="oferta")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OfertaRepository")
 */
class Oferta {
	/**
	 *
	 * @var int @ORM\Column(name="id", type="integer")
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="nombre", type="string", length=255)
	 */
	private $nombre;
	
	/**
	 *
	 * @var string @ORM\Column(name="slug", type="string", length=255)
	 */
	private $slug;
	
	/**
	 *
	 * @var string @ORM\Column(name="descripcion", type="text")
	 */
	private $descripcion;
	
	/**
	 *
	 * @var string @ORM\Column(name="condiciones", type="text")
	 */
	private $condiciones;
	
	/**
	 *
	 * @var string @ORM\Column(name="rutaFoto", type="string", length=255)
	 */
	private $rutaFoto;
	
	/**
	 *
	 * @var string @ORM\Column(name="precio", type="decimal", precision=10, scale=0)
	 */
	private $precio;
	
	/**
	 *
	 * @var string @ORM\Column(name="descuento", type="decimal", precision=10, scale=0)
	 */
	private $descuento;
	
	/**
	 *
	 * @var \DateTime @ORM\Column(name="fechaPublicacion", type="datetime")
	 */
	private $fechaPublicacion;
	
	/**
	 *
	 * @var \DateTime @ORM\Column(name="fechaExpiracion", type="datetime")
	 */
	private $fechaExpiracion;
	
	/**
	 *
	 * @var int @ORM\Column(name="compras", type="integer")
	 */
	private $compras;
	
	/**
	 *
	 * @var int @ORM\Column(name="umbral", type="integer")
	 */
	private $umbral;
	
	/**
	 *
	 * @var bool @ORM\Column(name="revisada", type="boolean")
	 */
	private $revisada;
	
	/**
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ciudad")
	 */
	private $ciudad;
	/**
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tienda")
	 */
	private $tienda;
	
	/**
	 * Get id
	 *
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set nombre
	 *
	 * @param string $nombre        	
	 *
	 * @return Oferta
	 */
	public function setNombre($nombre) {
		$this->nombre = $nombre;
		$this->setSlug(Slugger::getSlug($nombre));
		return $this;
	}
	
	/**
	 * Get nombre
	 *
	 * @return string
	 */
	public function getNombre() {
		return $this->nombre;
	}
	
	/**
	 * Set slug
	 *
	 * @param string $slug        	
	 *
	 * @return Oferta
	 */
	public function setSlug($slug) {
		$this->slug = $slug;
		
		return $this;
	}
	
	/**
	 * Get slug
	 *
	 * @return string
	 */
	public function getSlug() {
		return $this->slug;
	}
	
	/**
	 * Set descripcion
	 *
	 * @param string $descripcion        	
	 *
	 * @return Oferta
	 */
	public function setDescripcion($descripcion) {
		$this->descripcion = $descripcion;
		
		return $this;
	}
	
	/**
	 * Get descripcion
	 *
	 * @return string
	 */
	public function getDescripcion() {
		return $this->descripcion;
	}
	
	/**
	 * Set condiciones
	 *
	 * @param string $condiciones        	
	 *
	 * @return Oferta
	 */
	public function setCondiciones($condiciones) {
		$this->condiciones = $condiciones;
		
		return $this;
	}
	
	/**
	 * Get condiciones
	 *
	 * @return string
	 */
	public function getCondiciones() {
		return $this->condiciones;
	}
	
	/**
	 * Set rutaFoto
	 *
	 * @param string $rutaFoto        	
	 *
	 * @return Oferta
	 */
	public function setRutaFoto($rutaFoto) {
		$this->rutaFoto = $rutaFoto;
		
		return $this;
	}
	
	/**
	 * Get rutaFoto
	 *
	 * @return string
	 */
	public function getRutaFoto() {
		return $this->rutaFoto;
	}
	
	/**
	 * Set precio
	 *
	 * @param string $precio        	
	 *
	 * @return Oferta
	 */
	public function setPrecio($precio) {
		$this->precio = $precio;
		
		return $this;
	}
	
	/**
	 * Get precio
	 *
	 * @return string
	 */
	public function getPrecio() {
		return $this->precio;
	}
	
	/**
	 * Set descuento
	 *
	 * @param string $descuento        	
	 *
	 * @return Oferta
	 */
	public function setDescuento($descuento) {
		$this->descuento = $descuento;
		
		return $this;
	}
	
	/**
	 * Get descuento
	 *
	 * @return string
	 */
	public function getDescuento() {
		return $this->descuento;
	}
	
	/**
	 * Set fechaPublicacion
	 *
	 * @param \DateTime $fechaPublicacion        	
	 *
	 * @return Oferta
	 */
	public function setFechaPublicacion($fechaPublicacion) {
		$this->fechaPublicacion = $fechaPublicacion;
		
		return $this;
	}
	
	/**
	 * Get fechaPublicacion
	 *
	 * @return \DateTime
	 */
	public function getFechaPublicacion() {
		return $this->fechaPublicacion;
	}
	
	/**
	 * Set fechaExpiracion
	 *
	 * @param \DateTime $fechaExpiracion        	
	 *
	 * @return Oferta
	 */
	public function setFechaExpiracion($fechaExpiracion) {
		$this->fechaExpiracion = $fechaExpiracion;
		
		return $this;
	}
	
	/**
	 * Get fechaExpiracion
	 *
	 * @return \DateTime
	 */
	public function getFechaExpiracion() {
		return $this->fechaExpiracion;
	}
	
	/**
	 * Set compras
	 *
	 * @param integer $compras        	
	 *
	 * @return Oferta
	 */
	public function setCompras($compras) {
		$this->compras = $compras;
		
		return $this;
	}
	
	/**
	 * Get compras
	 *
	 * @return int
	 */
	public function getCompras() {
		return $this->compras;
	}
	
	/**
	 * Set umbral
	 *
	 * @param integer $umbral        	
	 *
	 * @return Oferta
	 */
	public function setUmbral($umbral) {
		$this->umbral = $umbral;
		
		return $this;
	}
	
	/**
	 * Get umbral
	 *
	 * @return int
	 */
	public function getUmbral() {
		return $this->umbral;
	}
	
	/**
	 * Set revisada
	 *
	 * @param boolean $revisada        	
	 *
	 * @return Oferta
	 */
	public function setRevisada($revisada) {
		$this->revisada = $revisada;
		
		return $this;
	}
	
	/**
	 * Get revisada
	 *
	 * @return bool
	 */
	public function getRevisada() {
		return $this->revisada;
	}
	
	public function setCiudad(\AppBundle\Entity\Ciudad $ciudad)
	{
		$this->ciudad = $ciudad;
	}
	public function getCiudad()
	{
		return $this->ciudad;
	}
	public function setTienda(\AppBundle\Entity\Tienda $tienda)
	{
		$this->tienda = $tienda;
	}
	public function getTienda()
	{
		return $this->tienda;
	}
	public function __toString()
	{
		return $this->getNombre();
	}
}

