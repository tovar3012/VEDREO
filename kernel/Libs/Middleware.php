<?php 
	
	namespace kernel\Libs;

	use kernel\Libs\Alerts AS Alerta;
	use kernel\Libs\Redirec AS Redirec;

	class Middleware{

		public static function validar(){
			
			if( isset( $_SESSION['state'] ) ){
			
				unset( $_SESSION['state'] );
				return true;
			
			}else{
			
				Alerta::show('No tienes permiso, Error !');
				return false;
			
			}

			
			
		}		

	}

 ?>