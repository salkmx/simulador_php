<?php


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ESC_NIVEL_CURSO")
 */
class NivelCurso {

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", name="CVE_ID_NIVEL_CURSO")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $cveIdNivelCurso;

	/**
	 * @ORM\Column(type="string", name="DESCRIPCION")
	 */
	private $descripcion;

	public function getCveIdNivelCurso()
	{
		return $this->cveIdNivelCurso;
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