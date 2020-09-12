<?php 

	class Usuario {


		private $strNombre;
		private $strEmail;
		private $strTipo;
		private $strClave;
		protected $strFechaDeNacimiento;
		static $Estado = 'Activo';

		function __construct(string $nombre, string $email , string $tipo){

			$this->strNombre = $nombre;
			$this->strEmail = $email;
			$this->strTipo = $tipo;
			$this->strClave = rand();
			$this->strFechaDeNacimiento = date('m-d-y h:m:s');
		}

		public function getName(){
		return $this->strNombre;
		}

		public function getEstado(){

			return self::$Estado;
		}

		public function getDate(){

			return $this->strFechaDeNacimiento;
		}

		public function getPerfil(){

			echo 'Datos Personales<br>';
			echo 'Nombre: '.$this->strNombre.'<br>';
			echo 'email: '.$this->strEmail.'<br>';
			echo 'tipo: '.$this->strTipo.'<br>';
			echo 'fecha: '.$this->strFechaDeNacimiento.'<br>';
			echo 'estado: '.self::$Estado.'<br>';
			echo 'Contraseña:'.$this->strClave;
		}
	}
	
 ?>