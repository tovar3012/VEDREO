<?php 
	
	namespace App\Controller;
	
	use kernel\Controller\Controller AS Controller;

	use App\Models\UserModel AS User;
	
	use kernel\Libs\Request AS Request;
	use kernel\Libs\Redirec AS Redirec;
	
	use kernel\Libs\Alerts AS Alerta;
	

	class UserController{

		public static function index(){
			Controller::render('home');
		}

		public static function store(){
			User::create( Request::LoadRequestData() );
			Redirec::redirec('listar');
		}		

		public static function listar(){
			$datos = User::all();
			Controller::render_data('listar', $datos); 
		}

		public static function edit($id){
			$user = User::search($id);
			$view = Controller::make('edit');
			$view->data(['id' => $user->id]);
			$view->data(['nombre' => $user->nombre]);
			$view->data(['apellido' => $user->apellido]);
			$view->data(['edad' => $user->edad]);
			echo $view;
		}

		public static function update($id){
			$user = User::search($id);
			$data = Request::LoadRequestData();
			$user->nombre = $data['nombre'];
 			$user->apellido = $data['apellido'];
 			$user->edad = $data['edad'];
 			$user->save();
			Redirec::redirec('listar');
		}

		public static function delete($id){
			User::eliminar($id);
			Alerta::show('¡ Eliminado Correctamente !');
			Redirec::redirec('listar'); 	
		}

		public static function login(){
			Controller::render('auth/login');
		}
		
	}

