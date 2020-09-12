<?php

	class Conexion {


		private $host = 'localhost';
		private $user = 'root';
		private $pass = '';
		private $db = 'prueba';
		private $connect;

		public function __construct(){

			$stringConexion = "mysql:hos=".$this->host.";dbname=".$this->db.";charset=utf8";

			//echo $stringConexion.'<br>';
			try {
				 $this->connect = new PDO($stringConexion,$this->user,$this->pass);
				 $this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				//echo 'conexion exitosa';
			} catch (Exception $e) {
				$this->connect = 'ERROR';
				echo 'ERROR'.$e->getMeesage();
			}
		}

		public function connect(){

			return $this->connect;
		}
	}

 ?>