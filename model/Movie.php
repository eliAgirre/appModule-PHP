<?php

	class Movie {

		// Variables globales de la clase
		public $title;
		public $director;
		public $description;
		
		// El constructor obtiene 3 parámetros.
		public function __construct($title, $director, $description) {  
			
			// Establece cada propiedad obteniendo los datos del parámetro
	        $this->title = $title;
		    $this->director = $director;
		    $this->description = $description;

	    } // Cierre del constructor

	} // Cierre de la clase Movie

?>