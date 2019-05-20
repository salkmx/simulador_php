<?php


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ESC_TIPO_PREGUNTA")
 */
class TipoPregunta {

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", name="CVE_ID_TIPO_PREGUNTA")
	 * @ORM\GeneratedValue(strategy="NONE")
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