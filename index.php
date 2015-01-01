<?php 
	
	// Importamos el fichero Controller.php para los datos de la base de datos y poder mostrarlo al cliente
	include_once("controller/Controller.php");

	// Importamos una API externa de películas
	include_once('library/RottenTomatoes.php');

	// Definimos los ficheros estáticos (js,css,img)
	define('ROOT', dirname(dirname(__FILE__)));

	// Creamos un objeto de tipo Controller
	$controller = new Controller();

	// Llamamos a la función invoke, que está en el fichero Controller.php
	$controller->invoke();

	// Guardamos en una variable el objeto de tipo RottenTomtatos pasando nuestra API key
	$rottenTomatoes = new RottenTomatoes('25uu9nryfxqb5b65umh6mkkr', 10, 'us');

	echo "<pre>";
	try {

		// Guarda en una variable el resultado obtenido de la función getOpeningMovies
		$result = $rottenTomatoes->getOpeningMovies();

		// Muestra por pantalla las películas en un objeto JSON
		print_r($result);
		
	}catch (Exception $e) {

		// Muestra por pantalla el error
		print_r($e);

	} // Cierre de la excepción 

	echo "</pre>";

?>