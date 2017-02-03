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
			return $user::all();
		}		

		/*
		public static function delete($id){
			$user = new UserModel();
			$temp = $user::find($id);
			$temp->delete();
		}
		*/		

		
		public static function read(){
			$user = new UserModel();
			return self::ArrayToJSON( $user::all() );
		}

		public static function ArrayToJSON($array) {
			$json = '{"data":[';
			foreach( $array as $row) { 
				$json .= '[';
				$json .= '"'.$row->id.'",'; 
				$json .= '"'.$row->nombre.'",';
				$json .= '"'.$row->apellido.'",';
				$json .= '"'.$row->edad.'",';
				$json .= '"'.$row->created_at.'",';
				$json .= '"'.$row->updated_at.'"';
				$json .= '],';
			}
			$json = rtrim($json, ',');
			$json .= "]}";
			return $json;
		}
		

	}

?>