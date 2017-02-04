<?php 
	
	namespace kernel\Controller;
	
	/*
    |--------------------------------------------------------------------------
    | Plates 
    |--------------------------------------------------------------------------
    | 	
    |	http://platesphp.com/
    |
    */

	use League\Plates\Engine AS Plates;
	
	use kernel\Libs\TokenCSRF AS Token;

	use kernel\PlatesExtension\AssetVedreo AS AssetVedreo;

	class Controller{
		
		private static function config_view(){
			$view = new Plates(ROOT_VIEWS);
			
			$view->loadExtension(new AssetVedreo() );

			return $view;
		}

		public static function render( $vista ){
			$view = self::config_view();
			echo $view->render($vista);
		}
	
		public static function render_data( $vista, $data ){
			$view = self::config_view();
			echo $view->render($vista, ['data' => $data]);
		}

		public static function make( $vista ){
			$view = self::config_view();
			return $view->make($vista);
		}

	}

