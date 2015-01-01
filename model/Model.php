<?php

	// Importamos el fichero Movie.php
	include_once("model/Movie.php");

	class Model {

		// getMovieList contiene un array con los datos de los libros 
		public function getMovieList(){

			// hes un simulacro de una base de datos
			return array(

				"The Hunger Games" => new Movie("The Hunger Games", "Gary Ross", "Película de ciencia ficción, acción y drama."),
				"Big Hero 6" => new Movie("Big Hero 6", "Don Hall", "Película animada de superhéroes."),
				"PHP for Dummies" => new Movie("PHP for Dummies", "Some Smart Guy", "")

			); // Cierre del array

		} // Cierre de la función getMovieList

		
		// getMovie. Contiene el parámetro título
		public function getMovie($title){

			// this es un objeto (libro --> titulo, autor, descripcion)
			// cada libro se que obtiene de la función getMovieList
			// Se guarda la lista de los libros en la variable allMovies
			$allMovies = $this->getMovieList();

			// retorna el título de cada libro 
			return $allMovies[$title];
			
		} // Cierre de la función getMovie
		
	} // Cierre de la clase Model

?>