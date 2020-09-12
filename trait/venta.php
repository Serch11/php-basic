<?php

	require_once('ClassTienda.php');
	$objeto = new Tienda();
	$objeto->setProducto('teclado',40000,10);
	echo $objeto->getProducto();

	$objeto->setCarrito('Maus',2);
	$objeto->setStock(2);
	echo '<hr>';
	echo $objeto->getProducto();

	echo '<hr>';
	echo $objeto->getCarrito();

 ?>