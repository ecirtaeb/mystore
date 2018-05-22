<?php include 'head.phtml.php'; ?>
<body>
	<head>
		<nav class="flex">
			<a href="index.php" >Accueil</a>
			<a href="catalogue.php" class="active">Catalogue</a>
			<a href="panier.php">Votre panier</a>
		</nav>
		<section class="login flex">
			<?php if ( isset($user) ) : ?>
				<p><?=$user['firstname']?> connecté</p>
			<?php else : ?>
				<p>Non connecté à un compte</p>
			<?php endif; ?>
		</section>

		<form method="GET" action="recherche.php">
			<label for="rechArticle"></label>
			<input type="text"  id="rechArticle" name="findProduct" placeholder="Que cherchez-vous ?">
			<button type="submit" classe="rech">GO</button>
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
