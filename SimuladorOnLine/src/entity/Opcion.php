<?php

require_once "src/commons/BaseFechasEntity.php";

use Doctrine\ORM\Mapping as ORM;
use commons\BaseFechasEntity as BaseFechasEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="EST_OPCION")
 */
class Opcion extends BaseFechasEntity {

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", name="CVE_ID_OPCION")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $cveIdOpcion;

	/**
	 * @ORM\ManyToOne(targetEntity="Pregunta")
	 * @ORM\JoinColumn(name="CVE_ID_PREGUNTA", referencedColumnName="CVE_ID_PREGUNTA")
	 */
	private $pregunta;

	/**
	 * @ORM\Column(type="string", name="DESCRIPCION")
	 */
	private $descripcion;
	
	/**	 
	 * @ORM\Column(type="integer", name="RESPUESTA_CORRECTA")	 
	 */
	private $tiempoRespuesta;

	public function getCveIdOpcion()
	{
		return $this->cveIdOpcion;
	}

	public function getPregunta()
	{
		return $this->pregunta;
	}

	public function setPregunta($pregunta)
	{
		$this->pregunta = $pregunta;
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
