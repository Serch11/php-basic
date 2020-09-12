<?php

	require_once('ClassOperacion.php');
	require_once('ClassOperacionesBasicas.php');
	class Calcular implements Operacion,OperacionesBasicas {


		public function Raiz(float $num):float{
			$total = sqrt($num);
			return $total;
		}

		public function Potencia(int $num , int $potencia):int {

			$total = pow($num,$potencia);
			return $total;
		}

		public function OpBasicas(int $num1 , int $num2 , string $operacion){

			if($operacion == '+'){

				$total = $num1 + $num2;
			}else if ($operacion == '-') {
				$total = $num1 - $num2;
			}else if ($operacion == '*') {
				$total = $num1 * $num2;
			}else if ($operacion == '/') {
				$total = $num1 / $num2;
			}else {

				$total = 'Operacion no valida';
			}
			return $total;
		}

	}

 ?>