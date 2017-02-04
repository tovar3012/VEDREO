<?php 
	
	namespace kernel\Libs;

	class TokenCSRF{

		public static function GenerateInput(){
			return "<input type='text' name='csrf' value=''>";
		}		

		public static function GenerateToken(){
			return md5( uniqid(mt_rand(), true) );
		}

	}

 ?>