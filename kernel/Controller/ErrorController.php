<?php 
	
	namespace kernel\Controller;
	
	use kernel\Controller\Controller AS Controller;

	class ErrorController{

		public static function code404(){
			Controller::render('error/404', 'VEDREO');
		}
		
	}

