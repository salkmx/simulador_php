<?php

require_once "src/commons/BaseFechasEntity.php";

use Doctrine\ORM\Mapping as ORM;
use commons\BaseFechasEntity as BaseFechasEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="EST_EXAMEN_APLICACION")
 */
class ExamenAplicacion extends BaseFechasEntity {

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", name="CVE_ID_EJECUCION_EXAMEN")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $cveIdEjecucionExamen;

	/**
	 * @ORM\ManyToOne(targetEntity="EstadoProgreso")
	 * @ORM\JoinColumn(name="CVE_ID_ESTADO_PROGRESO", referencedColumnName="CVE_ID_ESTADO_PROGRESO")
	 */
	private $estadoProgreso;

	/**
	 * @ORM\ManyToOne(targetEntity="Examen")
	 * @ORM\JoinColumn(name="CVE_ID_EXAMEN", referencedColumnName="CVE_ID_EXAMEN")
	 */
	private $examen;

	/**
	 * @ORM\ManyToOne(targetEntity="InscripcionCurso")
	 * @ORM\JoinColumn(name="CVE_ID_INSCRIPCION", referencedColumnName="CVE_ID_INSCRIPCION")
	 */
	private $inscripcionCurso;

	/**
	 * @ORM\Column(type="integer", name="CALIFICACION")
	 */
	private $calificacion;

	public function getCveIdEjecucionExamen()
	{
		return $this->cveIdEjecucionExamen;
	}

	public function getEstadoProgreso()
	{
		return $this->estadoProgreso;
	}

	public function setEstadoProgreso($estadoProgreso)
	{
		$this->estadoProgreso = $estadoProgreso;
	}

	public function getExamen()
	{
		return $this->examen;
	}

	public function setExamen($examen)
	{
		$this->examen = $examen;
	}

	public function getInscripcionCursoExamen()
	{
		return $this->inscripcionCurso;
	}

	public function setInscripcionCurso($inscripcionCurso)
	{
		$this->inscripcionCurso = $inscripcionCurso;
	}

	public function getCalificacion()
	{
		return $this->calificacion;
	}

	public function setCalificacion($calificacion)
	{
		$this->calificacion = $calificacion;
	}
}