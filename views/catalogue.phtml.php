<body>
	<head>
		<nav class="flex">
			<a href="index.php" >Accueil</a>
			<a href="catalogue.php" class="active">Catalogue</a>
			<a href="panier.php">Votre panier</a>
		</nav>
		<form method="GET" action="recherche.php">
			<label for="rechArticle"></label>
			<input type="text"  id="rechArticle" name="findProduct" placeholder="Que cherchez-vous ?">
			<button type="submit">GO</button>
		</form>
		

	</head>
	<main id="catalogue" class="container">
		<h1>Notre catalogue</h1>
		<section>		
			<ul class="flex">
				<?php foreach ($products as $product) : ?>
					<li>
						<img src="img/<?=$product['photo'] ?>" alt="Pas de photo">
						<article>
							<h3><?=$product['name'] ?></h3>
							<p><?=$product['description'] ?></p>
							<p>Prix : <span><?=$product['price'] ?></span></p>
							<a href="ajoutPanier.php">Ajouter au panier hé hé !</a>
						</article>
					</li>
				<?php endforeach; ?>
			</ul>
		</section>
	</main>
</body>
