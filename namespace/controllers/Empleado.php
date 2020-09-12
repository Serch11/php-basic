<?php
namespace Controllers;

//require_once('../models/Persona.php');
//require_once('../autoload.php');
use models\Persona;


 class Empleado extends Persona {

 	 public $strPuesto;


 	 function __construct(int $dpi , string $nombre , int $edad){

 	 	parent::__construct($dpi,$nombre,$edad);
 	 }

 	 public function setPuesto( string $puesto){
 	 	$this->strPuesto = $puesto;
 	 }

 	 public function getPuesto():string{
 	 	return $this->strPuesto;
 	 }

 	 public function getPersona(){
			$dato = "
			<h2>DATOS PERSONALES<h2>
			DPI:{$this->intDpi}<br>
			NOMBRE:{$this->strNombre}<br>
			EDAD:{$this->intEdad}<br>
			";
			return $dato;
		}

		public function setMensaje(string $mensaje){
			$this->mensaje = $mensaje;
		}

		public function getMensaje():string{
			return $this->mensaje;
		}

 }

 ?>