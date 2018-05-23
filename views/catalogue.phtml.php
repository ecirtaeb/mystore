<?php include 'head.phtml.php'; ?>
<body>
	<head>
		<nav class="flex">
			<a href="home.php" >Accueil</a>
			<a href="catalogue.php" class="active">Catalogue</a>
			<a href="panier.php">Votre panier</a>
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
	<main id="catalogue" class="container">
		<h1>Notre catalogue</h1>
		<section class="catalogue">		
			<ul class="flex">
				<?php foreach ($products as $product) : ?>
					<li>
						<img src="img/<?=$product['photo'] ?>" alt="Pas de photo">
						<article>
							<h3><?=$product['name'] ?></h3>
							<p><?=$product['description'] ?></p>
							<p>Prix : <span><?=$product['price'] ?></span></p>
							<a href="ajoutPanier.php">Ajouter au panier allez !!!</a>
						</article>
					</li>
				<?php endforeach; ?>
			</ul>
		</section>
	</main>
</body>
