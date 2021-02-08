<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Test PHP - Bonjour</title>
	<link rel="shortcut icon" href="img\icon-castex-64.png" type="image/x-icon">
	<link rel="stylesheet" href="style.css" />
	<?php $name = isset($_POST['name']) ? $_POST['name'] : "bel inconnu~"; ?>
</head>

<body>
	<nav>
		<div><a href="/index.php">Accueil</a></div>
		<div><a href="/bonjour.php">Bonjour</a></div>
		<div><a href="/demo.php">Demo</a></div>
	</nav>
	<main class="bonjour">
		<h1>Bonjour <?php echo $name ?></h1>
		<form method="post">
			<input class="form-input" type="text" name="name" autocomplete="off" />
			<input class="form-submit" type="submit" value="Envoyer">
		</form>
	</main>
</body>

</html>