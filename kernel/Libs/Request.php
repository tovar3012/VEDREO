<?php 
	
	namespace kernel\Libs;

	class Request{

		public static function LoadRequestData(){

			if($_POST){
				
				$request = $_POST;

				$cantidad = count($request);
				$keys = array_keys($request); // obtiene los nombres de los inputs
				$valores = array_values($request); // obtiene los valores de los inputs

				$data = array();

				// crea las variables y les asigna el valor
				for($i=0; $i<$cantidad; $i++){ 

					$data[ $keys[$i] ] = $valores[$i]; 
					
				}

				return $data;

			}	

			
		}

	}

 ?>