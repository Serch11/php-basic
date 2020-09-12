<?php

	require_once('Producto.php');
	require_once('Carrito.php');
	class Tienda
	{

	   use Producto, Carrito;
	   public $floatTotal = 0;
	   public function getCarrito()
	   {
	   	$this->floatTotal = $this->Precio * $this->intCantidad;

	   	$infoProducto = "

	   			Descripcion: {$this->strProducto}<br>
	    		Stock : {$this->intCantidad}<br>
	    		Precio : {$this->Precio}<br>
	    		Total : {$this->floatTotal}
	   	";
	   	return $infoProducto;
	   }


	}
 ?>