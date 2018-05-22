<body>
	<head>
		<nav class="flex">
			<a href="index.php" >Accueil</a>
			<a href="catalogue.php">Catalogue</a>
			<a href="panier.php">Votre panier</a>
		</nav>
		<form method="GET" action="recherche.php">
			<label for="rechArticle"></label>
			<input type="text"  id="rechArticle" name="findProduct" placeholder="Que cherchez-vous ?">
			<button type="submit">GO</button>
		</form>
		<section class="login flex">
			<?php if ( count($user) > 0 ) : ?>
				<p>Bonjour <?=$user['firstname']?> </p>
			<?php else : ?>
				<p>Bonjour bel inconnu</p>
			<?php endif; ?>
		</section>
	</head>
	<main id="retourRecherche" class="container">
		<h1>Resultat de la recherche</h1>
		<?php echo('Vous recherchiez : <span>' . $rech) . '</span>' ?>
		<section>		
			<ul class="flex">
				<?php foreach ($products as $product) : ?>
					<li>
						<img src="img/<?=$product['photo'] ?>" alt="Pas de photo">
						<article>
							<h3><?=$product['name'] ?></h3>
							<p><?=$product['description'] ?></p>
							<p>Prix : <span><?=$product['price'] ?></span></p>
							<a href="ajoutPanier.php"
						</article>
					</li>
				<?php endforeach; ?>
			</ul>
		</section>
	</main>
</body>
