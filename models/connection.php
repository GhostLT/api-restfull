<?php

require_once "get.model.php";

class Connection{

	/*=============================================
	Información de la base de datos
	=============================================*/

	static public function infoDatabase(){

		$infoDB = array(

			"database" => "database-1", //nombre de la base de datos
			"user" => "root", //usuario de la base de datos
			"pass" => ""   //constrasena

		);

		//retorna informacion de la base de datos
		return $infoDB;

	}

	/*=============================================
	APIKEY
	=============================================*/

	static public function apikey(){

		return "c5LTA6WPbMwHhEabYu77nN9cn4VcMj";

	}

	/*=============================================
	Acceso público
	=============================================*/
	static public function publicAccess(){

		$tables = ["courses","intructors"];

		return $tables;

	}

	/*=============================================
	Conexión a la base de datos
	=============================================*/
	//metodo estatico llamado connect
	static public function connect(){

		//intento
		try{

			//Clase PDO
			$link = new PDO(
				//peticion de la solicitud MySQL lo concatenamos llamando la clase Connection y el meodo infoDatabase la cual tendra el array %infoDB con sus propiedades
				"mysql:host=localhost;dbname=".Connection::infoDatabase()["database"],
				Connection::infoDatabase()["user"], 
				Connection::infoDatabase()["pass"]
			);
			//aqui decimos que los valores de esta instancia vengan en utf8
			$link->exec("set names utf8");

		//excepcion del error
		}catch(PDOException $e){
			//que muestre un mensaje con el tipo de error que viene
			die("Error: ".$e->getMessage());

		}
		//retornamos para que aya conexion a la base de datos
		return $link;

	}

	/*=============================================
	Validar existencia de una tabla en la bd
	=============================================*/

	static public function getColumnsData($table, $columns){

		/*=============================================
		Traer el nombre de la base de datos
		=============================================*/

		$database = Connection::infoDatabase()["database"];

		/*=============================================
		Traer todas las columnas de una tabla
		=============================================*/

		$validate = Connection::connect()
		->query("SELECT COLUMN_NAME AS item FROM information_schema.columns WHERE table_schema = '$database' AND table_name = '$table'")
		->fetchAll(PDO::FETCH_OBJ);

		/*=============================================
		Validamos existencia de la tabla
		=============================================*/

		if(empty($validate)){

			return null;

		}else{

			/*=============================================
			Ajuste de selección de columnas globales
			=============================================*/

			if($columns[0] == "*"){
				
				array_shift($columns);

			}

			/*=============================================
			Validamos existencia de columnas
			=============================================*/

			$sum = 0;
				
			foreach ($validate as $key => $value) {

				$sum += in_array($value->item, $columns);	
				
						
			}



			return $sum == count($columns) ? $validate : null;
			
			
			
		}

	}

	/*=============================================
	Generar Token de Autenticación
	=============================================*/

	static public function jwt($id, $email){

		$time = time();

		$token = array(

			"iat" =>  $time,//Tiempo en que inicia el token
			"exp" => $time + (60*60*24), // Tiempo en que expirará el token (1 día)
			"data" => [

				"id" => $id,
				"email" => $email
			]

		);

		return $token;
	}

	/*=============================================
	Validar el token de seguridad
	=============================================*/

	static public function tokenValidate($token,$table,$suffix){

		/*=============================================
		Traemos el usuario de acuerdo al token
		=============================================*/
		$user = GetModel::getDataFilter($table, "token_exp_".$suffix, "token_".$suffix, $token, null,null,null,null);
		
		if(!empty($user)){

			/*=============================================
			Validamos que el token no haya expirado
			=============================================*/	

			$time = time();

			if($time < $user[0]->{"token_exp_".$suffix}){

				return "ok";

			}else{

				return "expired";
			}

		}else{

			return "no-auth";

		}

	}

}