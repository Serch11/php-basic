<?php
	require_once('ClassProducto.php');
	class Mueble extends Producto{

		public $color;
		public $strMaterial;
		public $strStatus = 'Activo';

		function __construct(string $descripcion , int $precio , string $color , string $material){

			parent::__construct($descripcion,$precio);

			$this->color = $color;
			$this->strMaterial = $material;

		}
		public function getInfoProducto(){

 	 	$datos = array('descripcion' => $this->strDescripcion,
 	 					'precio' => $this->floPrecio,
 	 					'cantidad'=>$this->IntStore,
 	 					'status' => $this->strStatus,
 	 					'color ' => $this->color,
 	 					'material' => $this->strMaterial
 	 					);

 	 	return $datos;
 	 }

	}
 ?>