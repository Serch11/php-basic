<?php

	require_once('ClassPersona.php');
	class Cliente extends Persona {

		public $intCreditos;

		function __construct(int $dpi , string $nombre , int $edad){

			parent::__construct($dpi, $nombre , $edad);
		}

		public function setCreditos( int $creditos){

			$this->intCreditos = $creditos;
		}

		public function getCreditos():int {

			return $this->intCreditos;
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