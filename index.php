<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Test PHP</title>
	<link rel="shortcut icon" href="img/icon-castex-64.png" type="image/x-icon">
	<link rel="stylesheet" href="style.css" />
	<?php $total = isset($_POST['cubesNumber']) ? $_POST['cubesNumber'] : 10; ?>
</head>

<body>
	<nav>
		<div><a href="/index.php">Accueil</a></div>
		<div><a href="/bonjour.php">Bonjour</a></div>
		<div><a href="/demo.php">Demo</a></div>
	</nav>
	<main>
		<h1>Nombre de cubes :
			<form method="post">
				<input class="form-input" type="number" name="cubesNumber" />
				<input class="form-submit" type="submit" value="Envoyer" />
			</form>
		</h1>
		<article class="cubes">
			<?php
			for ($i = 1; $i <= $total; $i++) {
				echo "<div class=\"cube\">$i</div>";
			}
			?>
		</article>
	</main>
</body>

</html>