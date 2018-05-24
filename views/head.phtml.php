<!DOCTYPE html>
<html lang="fr" id="accueil">
<head>
	<title>MYSTORE - accueil</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Kavivanar" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="../public/css/mystore.css">
	<link rel="stylesheet" type="text/css" href="../public/css/normalize.css">
</head>
<body>
	<head>
		<nav class="flex">
			<a href="home.php" >Accueil</a>
			<a href="catalogue.php" class="active">Catalogue</a>
			<a href="panier.php">Votre panier 
				<?php if ( isset($_SESSION['cart']) ) : ?>
					(<?=count($_SESSION['cart']);?> )
				<?php else : ?>
					(0)
				<?php endif; ?>
			</a>
		</nav>

		<section class="user flex login">
			<?php if ( !isset($_SESSION['id']) ) : ?>
					<p>NON CONNECTE</p>
					<a href="login.php" class="login">Connexion</a>
			<?php else : ?>
				<?php $user = getUserById($_SESSION['id']) ?>
				<p><?=$user['firstname']?> connecté</p>
				<a href="logoff.php" class="login">Dé connexion</a>
			<?php endif; ?>
		</section>

		<form method="GET" action="recherche.php">
			<label for="rechArticle"></label>
			<input type="text"  id="rechArticle" name="findProduct" placeholder="Que cherchez-vous ?">
			<button type="submit" classe="rech">GO</button>
		</form>
		
	</head>
