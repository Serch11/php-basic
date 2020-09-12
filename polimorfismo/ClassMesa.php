<?php

	require_once('ClassMueble.php');



	class Mesa extends Mueble {

	public $strTamaño;
	public $strForma;
	public $strStatus;



	function __construct(string $descripcion , float $precio , string $color , string $material , string $tamaño , string $forma){

		parent::__construct($descripcion,$precio,$color,$material);

		$this->strTamaño  = $tamaño;
		$this->strForma = $forma;
		}

		public function setStatus(string $status){

			$this->strStatus = $status;
		}

		public function getInfoProducto(){
		$datos = array('descripcion' => $this->strDescripcion,
 	 					'precio' => $this->floPrecio,
 	 					'cantidad'=>$this->IntStore,
 	 					'status' => $this->strStatus,
 	 					'color ' => $this->color,
 	 					'material' => $this->strMaterial,
 	 					'tamaño' => $this->strTamaño,
 	 					'forma' => $this->strForma
 	 					);

 	 	return $datos;
 	 }
	}

 ?>