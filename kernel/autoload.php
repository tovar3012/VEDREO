<?php 
	
	/*
    |--------------------------------------------------------------------------
    | Autoload Composer
    |--------------------------------------------------------------------------
    | 
    */
	
	$composer_route = ROOT.'\vendor\autoload.php';
	require $composer_route;

	/*
    |--------------------------------------------------------------------------
    | Router
    |--------------------------------------------------------------------------
    | 
	|	https://github.com/emilio/php-router
	|
    */

	$router = new Router\Router('/'.FOLDER);

	/*
    |--------------------------------------------------------------------------
    | ActiveRecord ORM
    |--------------------------------------------------------------------------
    | 	
    |	http://www.phpactiverecord.org
    |
    */

	ActiveRecord\Config::initialize(function($cfg){
	     $cfg->set_model_directory(ROOT.DS.'app'.DS.'Models');
	     $cfg->set_connections(array(
	         'development' => "mysql://".DB_USER.":".DB_PASS."@".DB_HOST."/".DB_DATABASE));
	 });


	/*
    |--------------------------------------------------------------------------
    | Autoload
    |--------------------------------------------------------------------------
    | 
    */
	
	spl_autoload_register('autoload');

	function autoload($class){
		$class = ROOT.DS.str_replace("\\", DS, $class).'.php';
		if(!file_exists($class)){
			throw new Exception("Error Cargar la clase ".$class);
		}
		require_once($class);
	}

?>