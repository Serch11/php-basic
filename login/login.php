<?php


	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'test';

	$conexion = mysqli_connect($host,$user,$pass,$db);

	if(!$conexion){

		die('no hay conexion:'.mysqli_connect_error());

	}
	echo 'conexion exitosa'.$host.'<br>';
	$nombre = $_POST['usuario'];
	$pass  = $_POST['password'];

	$query = mysqli_query($conexion, "SELECT * FROM  usuario  WHERE usuario ='".$nombre."' and  password = '".$pass."'");
	$nr = mysqli_num_rows($query);

	echo $nr;

	if($nr){

		//heade('location:pagina.html');
		echo  'Bienvenido '.$nombre;
		$select = mysqli_query($conexion,"SELECT * FROM usuario");
		echo  mysqli_num_rows($select);
		echo mysqli_free_result($select);


	}
	else if ($nr == 0 ){

		echo 'No ingreso:';
	}




 ?>