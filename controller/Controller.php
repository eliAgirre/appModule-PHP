<?php

	// Importamos el fichero Model.php (como si fuera una base de datos)
	include_once("model/Model.php");

	class Controller {

		// Definimos el objeto model
		public $model;
		
		// Creamos el constructor de la clase Controler
		public function __construct(){ 

			// Creamos el objeto de tipo Model
	        $this->model = new Model();

	    }  // Cierre del constructor

		
		// Definimos la función invoke sin ningún parámetro
		public function invoke(){

			// Si no se ha obtenido ningún pelicula
			if (!isset($_GET['movie'])){

				// Guardamos la lista de los peliculas en una variable
				$movies = $this->model->getmovieList();

				// Requiere el fichero movielist.php para mostrar la lista de los peliculas
				include 'view/movielist.php';

			}
			else{

				// Si se ha obtenido alguno de los peliculas, se guarda el pelicula en una variable
				$movie = $this->model->getmovie($_GET['movie']);

				// Requiere el fichero viewmovie.php para mostrar el pelicula obtenido
				include 'view/viewmovie.php';

			} // Cierre del else

		} // Cierre de la función invoke

	} // Cierre de la clase Controller

?>