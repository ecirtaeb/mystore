<?php include 'head.phtml.php'; ?>
<body>
	<head>
		<nav class="flex">
			<a href="home.php" >Accueil</a>
			<a href="catalogue.php">Catalogue</a>
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
			<button type="submit" class="rech">GO</button>
		</form>

	</head>
	<main id="retourRecherche" class="container">
		<h1>Resultat de la recherche</h1>
		<?php echo('Vous recherchiez : <span>' . $rech) . '</span>' ?>
		<?php if ( count($products) == 0 ): ?>
			<p>Nous n'avons rien trouvé qui corresponde</p>
		<?php else : ?>
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
		<?php endif  ?>
	</main>
</body>
