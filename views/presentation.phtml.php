<!DOCTYPE html>
<html lang="fr" id="listeHeros">
<head>
	<title>ARENA - présentation des héros</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Kavivanar" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="../public/css/arenaStyle.css">
	<link rel="stylesheet" type="text/css" href="../public/css/normalize.css">
</head>
<body class="container">
	<head>
		<nav class="flex">
			<a href="index.php">Accueil</a>
			<a href="ajoutUnHeros.php">Ajouter un héros</a>
			<a href="presentationHeros.php"  class="active">Présentation des héros</a>
			<a href="leRing.php">Le ring</a>
		</nav>
	</head>
	<main>
		<h1>Présentation des héros....tatatin !!</h1>
			<table id="presentation">		
				<?php
					// liste des héros
					if ( !$tousLesHeros) {

					 	print_r('pas de courageux pour le moment !!'); 	
						
					} else {
						print_r('<caption>Voici nos héros prêts au combat</caption>');
						print_r('<thead>');
							print_r('<th>Nom</th>');
							print_r('<th>Points de vie</th>');
							print_r('<th>Armure</th>');
							print_r('<th>Arme</th>');
							print_r('<th colspan=2>Attaque</th>');
							print_r('<th>Avatar</th>');
						print_r('</thead>');
						
						foreach ($tousLesHeros as $i => $ficheHero) {
						
							print_r ('<tr>');	
							
							foreach ($ficheHero as $j => $info) {
								
								if ( $j == 4) {   // avatar
								
									print_r ('<td>' . '<img src="' . $avatars[$info] [2] . '" alt="' . $avatars[$info] [1] . '" /></td>');	
									
								} elseif ( $j == 3 ) {  // arme
								
									print_r ('<td>' . $wippons[$info] [0] . '</td>');	// nom de l'arme
									print_r ('<td>' . $wippons[$info] [1] . '</td>');	// attaque mini
									print_r ('<td>' . $wippons[$info] [2] . '</td>');	//attaque maxi
									
								} else { 
								
									print_r ('<td>'.$info.'</td>');	
								}
							}
							print_r ('</tr>');	
					 		
						 } 

					}
				?>
			</table>
	</main>
</body>
