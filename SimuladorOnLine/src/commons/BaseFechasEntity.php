<?php

namespace commons;

use Doctrine\ORM\Mapping as ORM;

class BaseFechasEntity {
	
	/**
	 * @ORM\Column(type="datetime", name="FECHA_CREACION")
	 */
	protected $fechaCreacion;
	
	/**
	 * @ORM\Column(type="datetime", name="FECHA_ACTUALIZACION")
	 */
	protected $fechaActualizacion;
	
	/**
	 * @ORM\Column(type="datetime", name="FECHA_BAJA")
	 */
	protected $fechaBaja;
	

	public function getFechaCreacion()
	{
		return $this->fechaCreacion;
	}
	
	public function setFechaCreacion($fechaCreacion)
	{
		$this->fechaCreacion = $fechaCreacion;
	}
	
	public function getFechaActualizacion()
	{
		return $this->fechaActualizacion;
	}
	
	public function setFechaActualizacion($fechaActualizacion)
	{
		$this->fechaActualizacion = $fechaActualizacion;
	}
	
	public function getFechaBaja()
	{
		return $this->fechaBaja;
	}
	
	public function setFechaBaja($fechaBaja)
	{
		$this->fechaBaja = $fechaBaja;
	}
	
}