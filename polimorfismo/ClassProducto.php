<?php

 class Producto {

 	public $strDescripcion;
 	public $floPrecio;
 	protected $IntStore = 10;
 	protected $strStatus = 'Activo';


 	function __construct(string $descripcion, float $precio){

 		$this->strDescripcion = $descripcion;
 		$this->floPrecio = $precio;
 	}

 	 public function getInfoProducto(){

 	 	$datos = array('descripcion' => $this->strDescripcion,
 	 					'precio'  => $this->floPrecio,
 	 					'cantidad' => $this->IntStore,
 	 					'status'  =>  $this->strStatus);

 	 	return $datos;
 	 }
 }

 ?>