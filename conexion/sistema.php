<?php

	require_once('autoload.php');
	$usuario = new Usuario();
	//echo $usuario->insert('sergio',3014017281,'sredondo95@gmail.com');


	//$user = $usuario->getUsuario();
/*
	print_r('<pre>');
	print_r($user);
	print_r('</pre>');
*/

	$user = $usuario->getUsuario(3);
	print_r($user);

	echo $usuario->deleteUsuario(3);

	 //echo $usuario->updateUsuario(1,'sandra aycardi',32717560,'scaycardi@hotmail.com');
	 ?>
