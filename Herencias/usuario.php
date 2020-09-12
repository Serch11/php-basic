<?php
// implementamos las clases y metodos abstractos

require_once('ClassEmpleado.php');
require_once('ClassCliente.php');

	$empleado = new Empleado(1045734950,'Sergio Andres',24);
	$empleado->setPuesto('Ingeniero de Sistemas');
	$empleado->setMensaje('Bienvenido Empleado');

	echo $empleado->getMensaje();
	echo $empleado->getPersona();
	echo $empleado->getPuesto();

	echo '<hr>';

	$cliente = new Cliente(1045734950,'Sergio redondo',20);
	$cliente->setCreditos(10);
	$cliente->setMensaje('Bienvenido Cliente');

	echo $cliente->getMensaje();
	echo $cliente->getPersona();
	 echo $cliente->getCreditos();

 ?>