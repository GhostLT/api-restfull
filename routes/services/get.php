<?php
//esta es la vista o lo que llamamos la ruta en la API REST
//lo que va a mirar el cleinte cuando reciba la respuesta
//hace la solicitud de ejecutar un metodo que se encuentra en el controlador

//requiere o solicita el archivo controllers/get.controller.php
require_once "controllers/get.controller.php";
//requiere o solicita el archivo models/connection.php
require_once "models/connection.php";

//estos a continuacion sirven como parametros a los metodos que pasamos 
$select = $_GET["select"] ?? "*";
$orderBy = $_GET["orderBy"] ?? null;
$orderMode = $_GET["orderMode"] ?? null;
$startAt = $_GET["startAt"] ?? null;
$endAt = $_GET["endAt"] ?? null;
$filterTo = $_GET["filterTo"] ?? null;
$inTo = $_GET["inTo"] ?? null;

//instanciamos a GetController para hacer una solicitud de ejecutar un metodo que se encuentra en el controlador
$response = new GetController();

/*=============================================
Peticiones GET con filtro
=============================================*/

if(isset($_GET["linkTo"]) && isset($_GET["equalTo"]) && !isset($_GET["rel"]) && !isset($_GET["type"]) ){

	//hace una solicitud de ejecutar un metodo que se encuentra en el controlador
	$response -> getDataFilter($table, $select,$_GET["linkTo"],$_GET["equalTo"],$orderBy,$orderMode,$startAt,$endAt);

/*=============================================
Peticiones GET sin filtro entre tablas relacionadas
=============================================*/

}else if(isset($_GET["rel"]) && isset($_GET["type"]) && $table == "relations" && !isset($_GET["linkTo"]) && !isset($_GET["equalTo"])){


	//hace una solicitud de ejecutar un metodo que se encuentra en el controlador
	$response -> getRelData($_GET["rel"],$_GET["type"],$select,$orderBy,$orderMode,$startAt,$endAt);
	
/*=============================================
Peticiones GET con filtro entre tablas relacionadas
=============================================*/

}else if(isset($_GET["rel"]) && isset($_GET["type"]) && $table == "relations" && isset($_GET["linkTo"]) && isset($_GET["equalTo"])){


	//hace una solicitud de ejecutar un metodo que se encuentra en el controlador
	$response -> getRelDataFilter($_GET["rel"],$_GET["type"],$select,$_GET["linkTo"],$_GET["equalTo"],$orderBy,$orderMode,$startAt,$endAt);

/*=============================================
Peticiones GET para el buscador sin relaciones
=============================================*/

}else if(!isset($_GET["rel"]) && !isset($_GET["type"]) && isset($_GET["linkTo"]) && isset($_GET["search"])){


	//hace una solicitud de ejecutar un metodo que se encuentra en el controlador
	$response -> getDataSearch($table, $select,$_GET["linkTo"],$_GET["search"],$orderBy,$orderMode,$startAt,$endAt);

/*=============================================
Peticiones GET para el buscador con relaciones
=============================================*/

}else if(isset($_GET["rel"]) && isset($_GET["type"]) && $table == "relations" && isset($_GET["linkTo"]) && isset($_GET["search"])){


	//hace una solicitud de ejecutar un metodo que se encuentra en el controlador
	$response -> getRelDataSearch($_GET["rel"],$_GET["type"],$select,$_GET["linkTo"],$_GET["search"],$orderBy,$orderMode,$startAt,$endAt);

/*=============================================
Peticiones GET para selección de rangos
=============================================*/

}else if(!isset($_GET["rel"]) && !isset($_GET["type"]) && isset($_GET["linkTo"]) && isset($_GET["between1"]) && isset($_GET["between2"])){


	//hace una solicitud de ejecutar un metodo que se encuentra en el controlador
	$response -> getDataRange($table,$select,$_GET["linkTo"],$_GET["between1"],$_GET["between2"],$orderBy,$orderMode,$startAt,$endAt, $filterTo, $inTo);

/*=============================================
Peticiones GET para selección de rangos con relaciones
=============================================*/

}else if(isset($_GET["rel"]) && isset($_GET["type"]) && $table == "relations" && isset($_GET["linkTo"]) && isset($_GET["between1"]) && isset($_GET["between2"])){


	//hace una solicitud de ejecutar un metodo que se encuentra en el controlador
	$response -> getRelDataRange($_GET["rel"],$_GET["type"],$select,$_GET["linkTo"],$_GET["between1"],$_GET["between2"],$orderBy,$orderMode,$startAt,$endAt, $filterTo, $inTo);

}else{

	/*=============================================
	Peticiones GET sin filtro
	=============================================*/
	//pedimos que se ejecute el getData donde le estamos pasando como parametro la tabla
	$response -> getData($table, $select,$orderBy,$orderMode,$startAt,$endAt);


}









