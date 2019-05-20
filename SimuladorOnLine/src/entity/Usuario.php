<?php

require_once "src/commons/BaseFechasEntity.php";

use Doctrine\ORM\Mapping as ORM;
use commons\BaseFechasEntity as BaseFechasEntity;

/**
 * @ORM\Entity 
 * @ORM\Table(name="est_usuario")
 */
class Usuario extends BaseFechasEntity {
	
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", name="CVE_ID_USUARIO")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $cveIdUsuario;
	
	/**
	 * @ORM\ManyToOne(targetEntity="EstadoLogico")
	 * @ORM\JoinColumn(name="CVE_ID_ESTADO_LOGICO", referencedColumnName="CVE_ID_ESTADO_LOGICO")
	 */
	private $estadoLogico;
	
	/**
	 * @ORM\Column(type="string", name="NOMBRE")
	 */
	private $nombre;
	
	/**
	 * @ORM\Column(type="string", name="PRIMER_APELLIDO")
	 */
	private $primerApellido;
	
	/**
	 * @ORM\Column(type="string", name="SEGUNDO_APELLIDO")
	 */
	private $segundoApellido;	

	/**
	 * @ORM\Column(type="string", name="EMAIL")
	 */
	private $email;
	
	/**
	 * @ORM\Column(type="string", name="TELEFONO_MOVIL")
	 */
	private $telefonoMovil;
	
	/**
	 * @ORM\Column(type="string", name="TELEFONO_CASA")
	 */
	private $telefonoCasa;	

	/**
	 * @ORM\ManyToOne(targetEntity="EstadoUsuario")
	 * @ORM\JoinColumn(name="CVE_ID_ESTADO_USUARIO", referencedColumnName="CVE_ID_ESTADO_USUARIO")
	 */
	private $estadoUsuario;
	
	/**
	 * @ORM\Column(type="string", name="PASSWORD")
	 */
	private $password;
	
	public function getCveIdUsuario()
	{
		return $this->cveIdUsuario;
	}	
	
	public function getEstadoLogico()
	{
		return $this->estadoLogico;
	}
	
	public function setEstadoLogico($estadoLogico)
	{
		$this->estadoLogico = $estadoLogico;
	}
	
	public function getNombre()
	{
		return $this->nombre;
	}
	
	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}
	
	public function getPrimerApellido()
	{
		return $this->primerApellido;
	}
	
	public function setPrimerApellido($primerApellido)
	{
		$this->primerApellido = $primerApellido;
	}
	
	public function getSegundoApellido()
	{
		return $this->segundoApellido;
	}
	
	public function setSegundoApellido($segundoApellido)
	{
		$this->segundoApellido = $segundoApellido;
	}
	
	public function getEmail()
	{
		return $this->email;
	}
	
	public function setEmail($email)
	{
		$this->email = $email;
	}
	
	public function getTelefonoMovil()
	{
		return $this->telefonoMovil;
	}
	
	public function setTelefonoMovil($telefonoMovil)
	{
		$this->telefonoMovil = $telefonoMovil;
	}	
	
	public function getTelefonoCasa()
	{
		return $this->telefonoCasa;
	}
	
	public function setTelefonoCasa($telefonoCasa)
	{
		$this->telefonoCasa = $telefonoCasa;
	}
	
	public function getEstadoUsuario()
	{
		return $this->estadoUsuario;
	}
	
	public function setEstadoUsuario($estadoUsuario)
	{
		$this->estadoUsuario = $estadoUsuario;
	}
	
	public function getPassword()
	{
		return $this->password;
	}
	
	public function setPassword($password)
	{
		$this->password = $password;
	}
	
}