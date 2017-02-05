<?php 
	
	namespace App\Controller;
	
	use kernel\Controller\Controller AS Controller;

	use kernel\Libs\Request AS Request;
	use kernel\Libs\Redirec AS Redirec;
	
	class AuthController{

		public static function login(){
			var_dump( Request::LoadRequestData() );
			echo time();
		}		

	}

