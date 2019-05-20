<?php

require_once "src/commons/BaseFechasEntity.php";

use Doctrine\ORM\Mapping as ORM;
use commons\BaseFechasEntity as BaseFechasEntity;


/**
 * @ORM\Entity
 * @ORM\Table(name="est_curso")
 */
class Curso extends BaseFechasEntity {
	
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", name="CVE_ID_CURSO")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $cveIdCurso;
	
	/**
	 * @ORM\ManyToOne(targetEntity="EstadoLogico")
	 * @ORM\JoinColumn(name="CVE_ID_ESTADO_LOGICO", referencedColumnName="CVE_ID_ESTADO_LOGICO")
	 */
	private $estadoLogico;
	
	/**
	 * @ORM\ManyToOne(targetEntity="NivelCurso")
	 * @ORM\JoinColumn(name="CVE_ID_NIVEL_CURSO", referencedColumnName="CVE_ID_NIVEL_CURSO")
	 */
	private $nivelCurso;
	
	/**
	 * @ORM\Column(type="string", name="DESCRIPCION")
	 */
	private $descripcion;
	
	public function getCveIdCurso()
	{
		return $this->cveIdCurso;
	}
	
	public function getNivelCurso()
	{
		return $this->nivelCurso;
	}
	
	public function setNivelCurso($nivelCurso)
	{
		$this->nivelCurso = $nivelCurso;
	}
	
	public function getEstadoLogico()
	{
		return $this->estadoLogico;
	}
	
	public function setEstadoLogico($estadoLogico)
	{
		$this->estadoLogico = $estadoLogico;
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