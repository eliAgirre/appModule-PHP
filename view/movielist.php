<html>

	<head>
		<meta charset="utf8" />
		<title> FilmTalk  </title>
	</head>

	<body>

		<!-- Tabla -->
		<table>
			
			<tr><td>Title</td><td>Director</td><td>Description</td></tr>

			<?php 

				// Se obtienen cada campo de cada pelicula mediante un array, mostrando por pantalla
				foreach ($movies as $title => $movie){

					echo '<tr><td><a href="index.php?movie='.$movie->title.'">'.$movie->title.'</a></td><td>'.$movie->director.'</td><td>'.$movie->description.'</td></tr>';
				}

			?>
		</table> <!-- Cierre de la tabla -->

	</body>

</html>