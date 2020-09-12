<?php

	/**
	 * summary
	 */
	trait Carrito
	{
	    public $strProducto;
	    public $intCantidad;
	    public function setCarrito(string $producto , int $intCantidad)
	    {
	        $this->strProducto = $producto;
	        $this->intCantidad = $intCantidad;
	    }

	     abstract public function getCarrito();

	}

 ?>