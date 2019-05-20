<?php

require_once "src/commons/BaseFechasEntity.php";

use Doctrine\ORM\Mapping as ORM;
use commons\BaseFechasEntity as BaseFechasEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="EST_EXAMEN")
 */
class Examen extends BaseFechasEntity {

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", name="CVE_ID_EXAMEN")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $cveIdExamen;

	/**
	 * @ORM\ManyToOne(targetEntity="EstadoLogico")
	 * @ORM\JoinColumn(name="CVE_ID_ESTADO_LOGICO", referencedColumnName="CVE_ID_ESTADO_LOGICO")
	 */
	private $estadoLogico;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Unidad")
	 * @ORM\JoinColumn(name="CVE_ID_UNIDAD", referencedColumnName="CVE_ID_UNIDAD")
	 */
	private $unidad;

	/**
	 * @ORM\Column(type="string", name="DESCRIPCION")
	 */
	private $descripcion;

	public function getCveIdExamen()
	{
		return $this->cveIdExamen;
	}

	public function getEstadoLogico()
	{
		return $this->estadoLogico;
	}

	public function setEstadoLogico($estadoLogico)
	{
		$this->estadoLogico = $estadoLogico;
	}
	
	public function getUnidad()
	{
		return $this->unidad;
	}
	
	public function setUnidad($unidad)
	{
		$this->unidad = $unidad;
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