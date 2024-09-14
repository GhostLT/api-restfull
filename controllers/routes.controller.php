<?php

//Clase empleando MVC para llamar a mi vista principal llamado routes.php
class RoutesController{


	/*=============================================
	Ruta Principal
	=============================================*/
	
	//Metodo principal llamado index que incluye el archivo routes.php hace la tarea de imprimir el echo con formato JSON
	public function index(){

		include "routes/routes.php";

	}


}