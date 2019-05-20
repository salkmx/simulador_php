<?php


require_once "src/commons/BaseFechasEntity.php";

use Doctrine\ORM\Mapping as ORM;
use commons\BaseFechasEntity as BaseFechasEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="EST_UNIDAD")
 */
class Unidad extends BaseFechasEntity {

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", name="CVE_ID_UNIDAD")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $cveIdUnidad;

	/**
	 * @ORM\ManyToOne(targetEntity="EstadoLogico")
	 * @ORM\JoinColumn(name="CVE_ID_ESTADO_LOGICO", referencedColumnName="CVE_ID_ESTADO_LOGICO")
	 */
	private $estadoLogico;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Curso")
	 * @ORM\JoinColumn(name="CVE_ID_CURSO", referencedColumnName="CVE_ID_CURSO")
	 */
	private $curso;

	/**
	 * @ORM\Column(type="string", name="DESCRIPCION")
	 */
	private $descripcion;

	public function getCveIdUnidad()
	{
		return $this->cveIdUnidad;
	}
	
	public function getEstadoLogico()
	{
		return $this->estadoLogico;
	}
	
	public function setEstadoLogico($estadoLogico)
	{
		$this->estadoLogico = $estadoLogico;
	}		

	public function getCurso()
	{
		return $this->curso;
	}

	public function setCurso($curso)
	{
		$this->curso = $curso;
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
