<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ESC_ESTADO_USUARIO")
 */
class EstadoUsuario {

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", name="CVE_ID_ESTADO_USUARIO")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $cveIdEstadoUsuario;

	/**
	 * @ORM\Column(type="string", name="DESCRIPCION")
	 */
	private $descripcion;
	
	public function getCveIdEstadoUsuario()
	{
		return $this->cveIdEstadoUsuario;
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