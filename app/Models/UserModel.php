<?php 

	namespace App\Models;

	use kernel\Models\Model as Model;

	class UserModel extends Model{
		
		static $table_name = 'datos';

		static $primary_key = 'id';

		public static function create($request){
			$user = new UserModel();
			$user->nombre = $request['nombre'];
 			$user->apellido = $request['apellido'];
 			$user->edad = $request['edad'];
 			$user->save();
		}

		public static function all(){
			$user = new UserModel();
			return $user::find('all');
		}		
		
		public static function eliminar($id){
			$user = self::search($id);
			$user->delete();
		}
		
		public static function search($id){
			$user = new UserModel();
			$res = $user::find($id);
			return $res;
		}		

	}

?>