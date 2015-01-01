<html>

	<head>
		<meta charset="utf8" />
		<title> FilmTalk  </title>
	</head>

	<body>

		<?php 

			// Se obtiene cada campo del pelicula
			echo 'Title:' . $movie->title . '<br/>';
			echo 'Author:' . $movie->director . '<br/>';
			echo 'Description:' . $movie->description . '<br/>';

		?>

	</body>
</html>