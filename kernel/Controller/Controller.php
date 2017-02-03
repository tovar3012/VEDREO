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
	
	class Controller{
		
		private static function config_view(){
			$view = new Plates(ROOT_VIEWS);
		
			$view->registerFunction('css', function($string) {
			    return '/'.FOLDER.'/public/css/'.$string;
			});

			$view->registerFunction('js', function($string) {
			    return '/'.FOLDER.'/public/js/'.$string;
			});

			$view->registerFunction('route', function($string) {
			    return $GLOBALS['router']->url($string);
			});

			$view->registerFunction('img', function($string) {
			    return '/'.FOLDER.'/public/img/'.$string;
			});

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

