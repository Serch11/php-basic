<?php

	/**
	 * summary
	 */
	trait Producto
	{
	    public $strProducto;
	    public $Precio;
	    Public $intStock;

	    public function setProducto(string $descripcion , int $precio , int $cantidad)
	    {
	    	$this->Descripcion = $descripcion;
	    	$this->Precio = $precio;
	    	$this->intStock = $cantidad;
	    }

	    public function getProducto():string
	    {
	    	$infoProduct = "

	    		Descripcion: {$this->strProducto}<br>
	    		Precio : {$this->Precio}<br>
	    		Stock : {$this->intStock}


	    	";

	    	return $infoProduct;
	    }

	    function setStock(int $stock){
	    	$this->intStock = $this->intStock - $stock;
	    }

	}
 ?>