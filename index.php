<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Test PHP</title>
	<link rel="shortcut icon" href="img/icon-castex-64.png" type="image/x-icon">
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<nav>
		<div><a href="/index.php">Accueil</a></div>
		<div><a href="/bonjour.php">Bonjour</a></div>
		<div><a href="/demo.php">Demo</a></div>
	</nav>
	<main>
		<h1>Test d'une boucle for :</h1>
		<article class="cubes">
			<?php
			for ($i = 1; $i <= 100; $i++) {
				echo "<div class=\"cube\">$i</div>";
			}
			?>
		</article>
	</main>
</body>

</html>