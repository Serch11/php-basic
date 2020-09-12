<?php
	require_once('ClassCalcular.php');

	$operacion = new Calcular();
	echo $operacion->Raiz(5);
	echo '<br>';
	echo $operacion->Potencia(5,10);

	echo '<br>';
	 echo $operacion->OpBasicas(4,5,'a');
 ?>