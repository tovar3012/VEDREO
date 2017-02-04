<?php 
	
	namespace kernel\Libs;

	class Session{

		public static function SessionStart(){
			session_start();
		}		

		public static function SessionDestroy(){
			session_destroy();
		}

	}

 ?>