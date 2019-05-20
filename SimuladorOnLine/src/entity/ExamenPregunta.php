<?php

require_once "src/commons/BaseFechasEntity.php";

use Doctrine\ORM\Mapping as ORM;
use commons\BaseFechasEntity as BaseFechasEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="EST_EXAMEN_PREGUNTA")
 */
class ExamenPregunta extends BaseFechasEntity {

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", name="CVE_ID_EXAMEN_PREGUNTA")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $cveIdExamenPregunta;
	
	/**
	 * @ORM\ManyToOne(targetEntity="ExamenAplicacion")
	 * @ORM\JoinColumn(name="CVE_ID_EJECUCION_EXAMEN", referencedColumnName="CVE_ID_EJECUCION_EXAMEN")
	 */
	private $examenAplicacion;
	
	/**
	 * @ORM\ManyToOne(targetEntity="EstadoProgreso")
	 * @ORM\JoinColumn(name="CVE_ID_ESTADO_PROGRESO", referencedColumnName="CVE_ID_ESTADO_PROGRESO")
	 */
	private $estadoProgreso;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Opcion")
	 * @ORM\JoinColumn(name="CVE_ID_OPCION", referencedColumnName="CVE_ID_OPCION")
	 */
	private $opcion;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Pregunta")
	 * @ORM\JoinColumn(name="CVE_ID_PREGUNTA", referencedColumnName="CVE_ID_PREGUNTA")
	 */
	private $pregunta;
	
	public function getCveIdExamenPregunta()
	{
		return $this->cveIdExamenPregunta;
	}
	
	public function getEstadoProgreso()
	{
		return $this->estadoProgreso;
	}
	
	public function setEstadoProgreso($estadoProgreso)
	{
		$this->estadoProgreso = $estadoProgreso;
	}
	
	public function getExamenAplicacion()
	{
		return $this->examenAplicacion;
	}
	
	public function setExamenAplicacion($examenAplicacion)
	{
		$this->examenAplicacion = $examenAplicacion;
	}
	
	public function getOpcion()
	{
		return $this->opcion;
	}
	
	public function setOpcion($opcion)
	{
		$this->opcion = $opcion;
	}
	
	public function getPregunta()
	{
		return $this->pregunta;
	}
	
	public function setPregunta($pregunta)
	{
		$this->pregunta = $pregunta;
	}
}