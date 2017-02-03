<?php 
	
	namespace kernel\Libs;

	class Redirec{

		public static function redirec($string = null){
			$url = 'Location: /'.FOLDER.'/'.$string;
			header($url);
		}		

	}

 ?>