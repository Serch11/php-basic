<?php


	require_once ('autoload.php');

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

			$this->strNombre  = $nombre;
			$this->intTelefono = $telefono;
			$this->strEmail = $email;

			$sql = "INSERT INTO usuario (nombre,telefono,email) VALUES (?,?,?)";
			$insert = $this->conexion->prepare($sql);
			$arrayData = array($this->strNombre,$this->intTelefono,$this->strEmail);
			$resInsert = $insert->execute($arrayData);
			$lastIdInsert = $this->conexion->lastInsertId($resInsert);
			return $lastIdInsert;
		}

		public function getUsuarios(){

			$sql = "SELECT * FROM usuario";
			$query = $this->conexion->query($sql);
			$resQuery = $query->fetchall(PDO::FETCH_ASSOC);
			return $resQuery;

		}

		public function getUsuario(int $id){

			$sql = "SELECT * FROM usuario WHERE id = ? ";
			$arraywhere = array($id);
			$query = $this->conexion->prepare($sql);
			$query->execute($arraywhere);
			$resQuery = $query->fetch(PDO::FETCH_ASSOC);
			return $resQuery;
		}

		public function update(int $id , string $nombre , int $telefono , string $email){

			$this->strNombre  = $nombre;
			$this->intTelefono = $telefono;
			$this->strEmail = $email;

			$sql  = "UPDATE usuario SET nombre=?,telefono=?,email=?  WHERE  id=$id";
			$update = $this->conexion->prepare($sql);
			$arrayData = array($this->strNombre,$this->intTelefono,$this->strEmail);
			$resUpdate = $update->execute($arrayData);
			return $resUpdate;
		}

		public function delete (int $id){

			$sql = "DELETE  FROM usuario WHERE id = ?";
			$arrayWhere = array($id);
			$delete = $this->conexion->prepare($sql);
			$resDelete = $delete->execute($arrayWhere);
			return $resDelete;

		}
	}
 ?>