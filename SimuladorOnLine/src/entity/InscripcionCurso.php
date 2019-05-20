<?php

require_once "src/commons/BaseFechasEntity.php";

use Doctrine\ORM\Mapping as ORM;
use commons\BaseFechasEntity as BaseFechasEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="EST_INSCRIPCION_CURSO")
 */
class InscripcionCurso extends BaseFechasEntity {

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", name="CVE_ID_INSCRIPCION")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $cveIdInscripcion;

	/**
	 * @ORM\ManyToOne(targetEntity="EstadoProgreso")
	 * @ORM\JoinColumn(name="CVE_ID_ESTADO_PROGRESO", referencedColumnName="CVE_ID_ESTADO_PROGRESO")
	 */
	private $estadoProgreso;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Curso")
	 * @ORM\JoinColumn(name="CVE_ID_CURSO", referencedColumnName="CVE_ID_CURSO")
	 */
	private $curso;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Usuario")
	 * @ORM\JoinColumn(name="CVE_ID_USUARIO", referencedColumnName="CVE_ID_USUARIO")
	 */
	private $usuario;

	public function getCveIdInscripcion()
	{
		return $this->cveIdInscripcion;
	}

	public function getEstadoProgreso()
	{
		return $this->estadoProgreso;
	}

	public function setEstadoProgreso($estadoProgreso)
	{
		$this->estadoProgreso = $estadoProgreso;
	}
	
	public function getCurso()
	{
		return $this->curso;
	}
	
	public function setCurso($curso)
	{
		$this->curso = $curso;
	}
	
	public function getUsuario()
	{
		return $this->usuario;
	}
	
	public function setUsuario($usuario)
	{
		$this->usuario = $usuario;
	}

}
