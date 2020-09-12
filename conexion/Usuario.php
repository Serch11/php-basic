<?php

	//require_once('Conexion.php');
require_once('autoload.php');
	class Usuario extends Conexion {

		private $strNombre;
		private $intTelefono;
		private $strEmail;
		private $conexion;


		function __construct(){

			$this->conexion = new Conexion();
			$this->conexion = $this->conexion->connect();
		}

		public function insert(string $nombre , int $telefono , string $email){

			$this->strNombre = $telefono;
			$this->intTelefono = $telefono;
			$this->strEmail = $email;

			$sql = "INSERT INTO usuario(nombre,telefono,email) VALUES (?,?,?)";
			$insert = $this->conexion->prepare($sql);
			$arrayData = array($this->strNombre,$this->intTelefono,$this->strEmail);
			$insertRes = $insert->execute($arrayData);
			$idInsert = $this->conexion->lastInsertId();
			return $idInsert;

		}

		public function getUsuarios(){

			$sql = "SELECT * FROM usuario";
			$execute = $this->conexion->query($sql);
			$select = $execute->fetchall(PDO::FETCH_ASSOC);
			return $select;
		}


		public function updateUsuario(int $id,string $nombre , int $telefono , string $email){

			$this->strNombre = $nombre;
			$this->intTelefono = $telefono;
			$this->strEmail = $email;

			$sql = "UPDATE usuario SET nombre=?,telefono=?,email=? WHERE id=$id";
			$update = $this->conexion->prepare($sql);
			$arrayData = array($this->strNombre,$this->intTelefono,$this->strEmail);
			$request = $update->execute($arrayData);
			return $request;
		}

		public function getUsuario(int $id){

			$sql  = "SELECT * FROM usuario WHERE id= ? ";
			$arrayWhere = array($id);
			$select = $this->conexion->prepare($sql);
			$select->execute($arrayWhere);
			$request = $select->fetch(PDO::FETCH_ASSOC);
			return $request;
		}

		public function deleteUsuario(int $id){

			$sql = "DELETE FROM usuario where id= ?";
			$arraWhere = array($id);
			$delete = $this->conexion->prepare($sql);
			$del = $delete->execute($arraWhere);
			return $del;

		}

	}

 ?>