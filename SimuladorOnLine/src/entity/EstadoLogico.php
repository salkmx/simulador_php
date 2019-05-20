<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ESC_ESTADO_LOGICO")
 */
class EstadoLogico {
	
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", name="CVE_ID_ESTADO_LOGICO")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $cveIdEstadoLogico;	
	
	/**
	 * @ORM\Column(type="string", name="DESCRIPCION")
	 */
	private $descripcion;
	
	public function getCveIdEstadoLogico()
	{
		return $this->cveIdEstadoLogico;
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