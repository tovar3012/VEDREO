<?php 
	
	namespace kernel\Libs;

	use App\Libs\Alerts AS Alerta;
	use App\Libs\Redirec AS Redirec;

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