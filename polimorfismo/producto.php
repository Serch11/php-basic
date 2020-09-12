<?php

	require_once('ClassMesa.php');


	$producto = new Producto('Comedor',50000);

	print_r('<pre>');
	print_r($producto);
	print_r('</pre>');

	echo '<hr>';

	$mueble = new Mueble('Comedor',50000,'Marron','Madera');

	print_r('<pre>');
	print_r($mueble);
	print_r('</pre>');

	echo '<hr>';


	$mesa = new Mesa('Comedor',50000,'Marron','Madera','1mt','redonda');

	$mesa->setStatus('Comprado');
	print_r('<pre>');
	print_r($mesa);
	print_r('</pre>');
 ?>