<?php

/*=============================================
Mostrar errores

ahora le agregamos que muestre los errores

que tambien genere un log de errores

y colocamos la ruta donde queremos que aparezca el archivo de errores

=============================================*/
//Permite visualizar errores desde el navegador o desde POSTMAN
ini_set('display_errors', 1);
//crea un archivo carpeta para el log de errores
ini_set("log_errors", 1);
//ruta donde queremos que aparezca ese archivo de errores
ini_set("error_log",  "C:/xampp/htdocs/api-restfull/php_error_log");

/*=============================================
CORS
=============================================*/

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('content-type: application/json; charset=utf-8');

/*=============================================
Requerimientos
=============================================*/
//importamos el controlador para poder invocar a la clase 
require_once "controllers/routes.controller.php";
//Instanciamos la Clase llamada RoutesController()
$index = new RoutesController();
$index -> index(); //ejecutamos el metodo