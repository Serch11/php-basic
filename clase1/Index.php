<?php 


	require_once('ClassOperacion.php');

	$operacion1 = new Operacion(10,5);

	$Suma = $operacion1->getSuma();
	echo $Suma;
	echo '<br>';

	$multiplacion = $operacion1->getMultiplicacion();
	echo $multiplacion;
	echo '<br>';

	$Resta = $operacion1->getResta();
	echo $Resta;
	echo '<br>';

	$division = $operacion1->getDivision();
	echo $division;
	echo '<br>';
 ?>