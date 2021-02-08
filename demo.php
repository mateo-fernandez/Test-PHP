<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Test PHP - Demo</title>
	<link rel="shortcut icon" href="img\icon-castex-64.png" type="image/x-icon">
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<nav>
		<div><a href="/index.php">Accueil</a></div>
		<div><a href="/bonjour.php">Bonjour</a></div>
		<div><a href="/demo.php">Demo</a></div>
	</nav>
	<main class="center">
		<?php echo "<h1 class=\"workinprogress\">⚠️Work in progress⚠️</h1>";
			/*
			$creneaux = [];

			while (true) {
				$debut = (int)readline("Entrez l'horaire d'ouverture : ");
				$fin = (int)readline("Entrez l'horaire de fermeture : ");
				if ($debut >= $fin) {
					echo "Erreur : Votre heure d'ouverture {$debut}h est supérieur à l'heure de fermeture {$fin}h.\n";
				} else {
					$creneaux[] = [$debut, $fin];
					$action = readline("Voulez-vous enregistrer un nouveau créneau ? (y/n) ");
					if ($action == "n") {
						break;
					}
				}
			}

			echo "Le magasin est ouvert de ";
			foreach ($creneaux as $i => $creneau) {
				if ($i > 0) {
					echo " et de ";
				}
				echo "{$creneau[0]}h à {$creneau[1]}h";
			}
			*/
		?>
		<img src="/img/castex.png" alt="Castex qui te fait un doigt d'honneur, connard">
	</main>
</body>

</html>