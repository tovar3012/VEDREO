<?php 

	$router->get('/', function(){
		App\Controller\UserController::index();
	});

	$router->post('/save', function(){
		App\Controller\UserController::store();
	});

	$router->get('/listar', function() {
		App\Controller\UserController::listar();
	});

	$router->add('/edit/([0-9]+)', function($id) {
		App\Controller\UserController::edit($id);
	});

	$router->add('/update/([0-9]+)', function($id) {
		App\Controller\UserController::update($id);
	});

	$router->add('/delete/([0-9]+)', function($id) {
		App\Controller\UserController::delete($id);
	});
	
	$router->get('/login', function(){
		App\Controller\UserController::login();
	});	

	$router->post('/logindata', function(){
		App\Controller\AuthController::login();
	});

	$router->add('/.*', function () {
		header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
		kernel\Controller\ErrorController::code404();
	});
	
	$router->route();

 ?>