<?php 
	
	namespace kernel\Libs;

	class Alerts{

		public static function show($string){
			echo "<script>alert('".$string."');</script>";
		}		

	}

 ?>