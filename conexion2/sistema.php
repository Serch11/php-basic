<?php
	require_once('autoload.php');

	$newUsuario = new Usuario();

	//echo $newUsuario->insert('camila',30145027281,'camila@gamil.com');

	$users = $newUsuario->getUsuarios();

	print_r($users);

	echo '<hr>';
	$user = $newUsuario->getUsuario(2);
	print_r($user);

	echo '<hr>';
	echo $newUsuario->update(2,'sergio',3014017281,'sredondo95@gmail.com');
	$user = $newUsuario->getUsuario(2);
	print_r($user);

	echo '<hr>';
	echo $newUsuario->delete(2);
 ?>