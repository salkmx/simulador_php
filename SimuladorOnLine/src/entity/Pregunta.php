<?php


require_once "src/commons/BaseFechasEntity.php";

use Doctrine\ORM\Mapping as ORM;
use commons\BaseFechasEntity as BaseFechasEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="EST_PREGUNTA")
 */
class Pregunta extends BaseFechasEntity {

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", name="CVE_ID_PREGUNTA")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $cveIdPregunta;

	/**
	 * @ORM\ManyToOne(targetEntity="TipoPregunta")
	 * @ORM\JoinColumn(name="CVE_ID_TIPO_PREGUNTA", referencedColumnName="CVE_ID_TIPO_PREGUNTA")
	 */
	private $tipoPregunta;

	/**
	 * @ORM\ManyToOne(targetEntity="Examen")
	 * @ORM\JoinColumn(name="CVE_ID_EXAMEN", referencedColumnName="CVE_ID_EXAMEN")
	 */
	private $examen;

	/**
	 * @ORM\Column(type="string", name="DESCRIPCION")
	 */
	private $descripcion;
	
	/**	
	 * @ORM\Column(type="integer", name="TIEMPO_RESPUESTA")	 
	 */
	private $tiempoRespuesta;

	public function getCveIdPregunta()
	{
		return $this->cveIdPregunta;
	}

	public function getTipoPregunta()
	{
		return $this->tipoPregunta;
	}

	public function setTipoPregunta($tipoPregunta)
	{
		$this->tipoPregunta = $tipoPregunta;
	}

	public function getExamen()
	{
		return $this->examen;
	}

	public function setExamen($examen)
	{
		$this->examen = $examen;
	}

	public function getDescripcion()
	{
		return $this->descripcion;
	}

	public function setDescripcion($descripcion)
	{
		$this->descripcion = $descripcion;
	}
	
	public function getTiempoRespuesta()
	{
		return $this->tiempoRespuesta;
	}
	
	public function setTiempoRespuesta($tiempoRespuesta)
	{
		$this->tiempoRespuesta = $tiempoRespuesta;
	}

}
