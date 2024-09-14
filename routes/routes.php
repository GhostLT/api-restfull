<?php

require_once "models/connection.php";
require_once "controllers/get.controller.php";

//$routesArray es la informacion que viene en la URL
//separa en un array los parametros de un edpoint
$routesArray = explode("/", $_SERVER['REQUEST_URI']);
//elimina los espacios vacios
$routesArray = array_filter($routesArray);

/*=============================================
Cuando no se hace ninguna petición a la API
=============================================*/

//significa que $routesArray viene vacio
//indispensable para que cuando no esten haciendo ninguna solicitud a la API mande el famoso 404
if(count($routesArray) == 0){

	$json = array(

		'status' => 404, //porque no encontro informacion
		'results' => 'Not Found' //no encontrado

	);

	echo json_encode($json, http_response_code($json["status"])); //en PHP pasamos como segundo parametro
	//el status para que en POSTMAN tambien responda con 400 y no con 200 

	return;

}

/*=============================================
Cuando si se hace una petición a la API
=============================================*/
//si el array contine al menos 1 valor y existe algun metodo
if(count($routesArray) == 1 && isset($_SERVER['REQUEST_METHOD'])){

	$table = explode("?", $routesArray[1])[0];

	/*=============================================
	Validar llave secreta
	=============================================*/

	if(!isset(getallheaders()["Authorization"]) || getallheaders()["Authorization"] != Connection::apikey()){

		if(in_array($table, Connection::publicAccess()) == 0){
	
			$json = array(
		
				'status' => 400,
				"results" => "You are not authorized to make this request"
			);

			echo json_encode($json, http_response_code($json["status"]));//en PHP pasamos como segundo parametro
			//el status para que en POSTMAN tambien responda con 400 y no con 200 

			return;

		}else{

			/*=============================================
			Acceso público
			=============================================*/
			$response = new GetController();
			$response -> getData($table, "*",null,null,null,null);

			return;
		}
	
	}

	/*=============================================
	Peticiones GET
	=============================================*/

	if($_SERVER['REQUEST_METHOD'] == "GET"){

		//voy a solicitar lo que esta en la carpeta servicios el archivo get.php
		include "services/get.php";

	}

	/*=============================================
	Peticiones POST
	=============================================*/

	if($_SERVER['REQUEST_METHOD'] == "POST"){

		//voy a solicitar lo que esta en la carpeta servicios el archivo post.php
		include "services/post.php";

	}

	/*=============================================
	Peticiones PUT
	=============================================*/

	if($_SERVER['REQUEST_METHOD'] == "PUT"){

		//voy a solicitar lo que esta en la carpeta servicios el archivo put.php
		include "services/put.php";

	}

	/*=============================================
	Peticiones DELETE
	=============================================*/

	if($_SERVER['REQUEST_METHOD'] == "DELETE"){

		//voy a solicitar lo que esta en la carpeta servicios el archivo delete.php
		include "services/delete.php";

	}

}


