<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="CVE_ID_ESTADO_PROGRESO")
 */
class EstadoProgreso {

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", name="CVE_ID_ESTADO_PROGRESO")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $cveIdEstadoProgreso;

	/**
	 * @ORM\Column(type="string", name="DESCRIPCION")
	 */
	private $descripcion;
	
	public function getCveIdEstadoProgreso()
	{
		return $this->cveIdEstadoProgreso;
	}
	
	public function getDescripcion()
	{
		return $this->descripcion;
	}
	
	public function setDescripcion($descripcion)
	{
		$this->descripcion = $descripcion;
	}

}