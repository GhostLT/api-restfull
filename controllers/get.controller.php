<?php

//necesito requerir la conexion a la base de datos que voy a utilizar
require_once "models/get.model.php";


//me retorna la informacion que me este devolviendo el modelo 
class GetController{

	/*=============================================
	Peticiones GET sin filtro
	=============================================*/
	//este metodo recibe como parametro el nombre de la tabla
	static public function getData($table, $select,$orderBy,$orderMode,$startAt,$endAt){

		//la informacion recibida como parametro se lo envio a un modelo
		//instancio la clase GetModel para ejecutar el metodo getData y
		//enviamos como parameto la variable $table
		//$response aqui voy a solicitar una respuesta de lo que me traiga el modelo
		$response = GetModel::getData($table, $select,$orderBy,$orderMode,$startAt,$endAt);

		//instanciamos la clase
		$return = new GetController();
		//para poder ejecutar el metodo fcnResponse($response) el cual crea el echo en formato JSON
		//el parametro $response es la respuesta que me trae el modelo
		$return -> fncResponse($response);

	}

	/*=============================================
	Peticiones GET con filtro
	=============================================*/

	static public function getDataFilter($table, $select, $linkTo, $equalTo,$orderBy,$orderMode,$startAt,$endAt){

		//la informacion recibida como parametro se lo envio a un modelo
		//instancio la clase GetModel para ejecutar el metodo getDataFilter y
		//enviamos como parameto la variable $table
		//$response aqui voy a solicitar una respuesta de lo que me traiga el modelo
		$response = GetModel::getDataFilter($table, $select, $linkTo, $equalTo,$orderBy,$orderMode,$startAt,$endAt);

		//instanciamos la clase
		$return = new GetController();
		//para poder ejecutar el metodo fcnResponse($response) el cual crea el echo en formato JSON
		//el parametro $response es la respuesta que me trae el modelo
		$return -> fncResponse($response);

	}

	/*=============================================
	Peticiones GET sin filtro entre tablas relacionadas
	=============================================*/

	static public function getRelData($rel,$type,$select,$orderBy,$orderMode,$startAt,$endAt){

		//la informacion recibida como parametro se lo envio a un modelo
		//instancio la clase GetModel para ejecutar el metodo getRelData y
		//enviamos como parameto la variable $table
		//$response aqui voy a solicitar una respuesta de lo que me traiga el modelo
		$response = GetModel::getRelData($rel,$type,$select,$orderBy,$orderMode,$startAt,$endAt);
		
		//instanciamos la clase
		$return = new GetController();
		//para poder ejecutar el metodo fcnResponse($response) el cual crea el echo en formato JSON
		//el parametro $response es la respuesta que me trae el modelo
		$return -> fncResponse($response);

	}

	/*=============================================
	Peticiones GET con filtro entre tablas relacionadas
	=============================================*/

	static public function getRelDataFilter($rel,$type,$select, $linkTo, $equalTo,$orderBy,$orderMode,$startAt,$endAt){

		//la informacion recibida como parametro se lo envio a un modelo
		//instancio la clase GetModel para ejecutar el metodo getRelDataFilter y
		//enviamos como parameto la variable $table
		//$response aqui voy a solicitar una respuesta de lo que me traiga el modelo
		$response = GetModel::getRelDataFilter($rel,$type,$select, $linkTo, $equalTo,$orderBy,$orderMode,$startAt,$endAt);
		
		//instanciamos la clase
		$return = new GetController();
		//para poder ejecutar el metodo fcnResponse($response) el cual crea el echo en formato JSON
		//el parametro $response es la respuesta que me trae el modelo
		$return -> fncResponse($response);

	}

	/*=============================================
	Peticiones GET para el buscador sin relaciones
	=============================================*/

	static public function getDataSearch($table, $select, $linkTo, $search,$orderBy,$orderMode,$startAt,$endAt){

		//la informacion recibida como parametro se lo envio a un modelo
		//instancio la clase GetModel para ejecutar el metodo getDataSearch y
		//enviamos como parameto la variable $table
		//$response aqui voy a solicitar una respuesta de lo que me traiga el modelo
		$response = GetModel::getDataSearch($table, $select, $linkTo, $search,$orderBy,$orderMode,$startAt,$endAt);
		
		//instanciamos la clase
		$return = new GetController();
		//para poder ejecutar el metodo fcnResponse($response) el cual crea el echo en formato JSON
		//el parametro $response es la respuesta que me trae el modelo
		$return -> fncResponse($response);

	}

	/*=============================================
	Peticiones GET para el buscador entre tablas relacionadas
	=============================================*/

	static public function getRelDataSearch($rel,$type,$select, $linkTo, $search,$orderBy,$orderMode,$startAt,$endAt){

		//la informacion recibida como parametro se lo envio a un modelo
		//instancio la clase GetModel para ejecutar el metodo getRelDataSearch y
		//enviamos como parameto la variable $table
		//$response aqui voy a solicitar una respuesta de lo que me traiga el modelo
		$response = GetModel::getRelDataSearch($rel,$type,$select, $linkTo, $search,$orderBy,$orderMode,$startAt,$endAt);
		
		//instanciamos la clase
		$return = new GetController();
		//para poder ejecutar el metodo fcnResponse($response) el cual crea el echo en formato JSON
		//el parametro $response es la respuesta que me trae el modelo
		$return -> fncResponse($response);

	}

	/*=============================================
	Peticiones GET para selección de rangos
	=============================================*/

	static public function getDataRange($table,$select,$linkTo,$between1,$between2,$orderBy,$orderMode,$startAt,$endAt, $filterTo, $inTo){

		//la informacion recibida como parametro se lo envio a un modelo
		//instancio la clase GetModel para ejecutar el metodo getDataRange y
		//enviamos como parameto la variable $table
		//$response aqui voy a solicitar una respuesta de lo que me traiga el modelo
		$response = GetModel::getDataRange($table,$select,$linkTo,$between1,$between2,$orderBy,$orderMode,$startAt,$endAt, $filterTo, $inTo);
		
		//instanciamos la clase
		$return = new GetController();
		//para poder ejecutar el metodo fcnResponse($response) el cual crea el echo en formato JSON
		//el parametro $response es la respuesta que me trae el modelo
		$return -> fncResponse($response);

	}

	/*=============================================
	Peticiones GET para selección de rangos con relaciones
	=============================================*/

	static public function getRelDataRange($rel,$type,$select,$linkTo,$between1,$between2,$orderBy,$orderMode,$startAt,$endAt, $filterTo, $inTo){

		//la informacion recibida como parametro se lo envio a un modelo
		//instancio la clase GetModel para ejecutar el metodo getRelDataRange y
		//enviamos como parameto la variable $table
		//$response aqui voy a solicitar una respuesta de lo que me traiga el modelo
		$response = GetModel::getRelDataRange($rel,$type,$select,$linkTo,$between1,$between2,$orderBy,$orderMode,$startAt,$endAt, $filterTo, $inTo);
		
		//instanciamos la clase
		$return = new GetController();
		//para poder ejecutar el metodo fcnResponse($response) el cual crea el echo en formato JSON
		//el parametro $response es la respuesta que me trae el modelo
		$return -> fncResponse($response);

	}

	/*=============================================
	Respuestas del controlador
	=============================================*/

	//metodo que crea en formato JSON la respuesta desde el Controlador
	public function fncResponse($response){

		//si no esta vacia la respuesta del modelo envia los resultados en formato JSON
		if(!empty($response)){

			$json = array(

				'status' => 200,
				'total' => count($response), //total de indices que traiga esa respuesta
				'results' => $response

			);

		}else{

			//caso contrario si esta vacio manda el mensaje 404 No encontrado
			$json = array(

				'status' => 404,
				'results' => 'Not Found',
				'method' => 'get'

			);

		}

		echo json_encode($json, http_response_code($json["status"]));//en PHP pasamos como segundo parametro
	    //el status para que en POSTMAN tambien responda con 400 y no con 200 

	}

}