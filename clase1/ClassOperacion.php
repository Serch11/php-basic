<?php 
	
	class Operacion {

	 	public $cantidadUno;
	 	public $cantidadDos;
	 	public $SumaTotal;


	 	function __construct(int $valor1 ,int $valor2){

	 		$this->cantidadUno = $valor1;
	 		$this->cantidadDos = $valor2;
	 	}

	 	public function getSuma(){

	 		$this->SumaTotal = $this->cantidadUno + $this->cantidadDos;
	 		return $this->SumaTotal;
	 	}

	 	public function getResta(){
	 		$this->SumaTotal = $this->cantidadUno - $this->cantidadDos;
	 		return $this->SumaTotal;;
	 	}


	 	public function getMultiplicacion(){
	 		$this->SumaTotal = $this->cantidadUno * $this->cantidadDos;
	 		return $this->SumaTotal;;
	 	}


	 	public function getDivision(){
	 		$this->SumaTotal = $this->cantidadUno / $this->cantidadDos;
	 		return $this->SumaTotal;;
	 	}
	}

 ?>