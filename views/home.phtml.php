<?php include 'head.phtml.php'; ?>
<body >
	<head>
		<nav class="flex">
			<a href="home.php"  class="active">Accueil</a>
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

	</head>
	<main class="container">
		<h1>MYSTORE</h1>
		<section>
			<h2>Des jeux pour les enfants</h2>
			<ul class="flex" class="home">
				<li>Des seaux pour aller chercher de l'eau</li>
				<li>Des jeux pour les rendre heureux</li>
				<li>Des bouées pour ne pas les noyer</li>
				<li><img src="img/seaumetal.png" alt="seau"></li>
				<li><img src="img/jeuballe1.png" alt="jeu"></li>
				<li><img src="img/boueecanard.png" alt="bouée"></li>
			</ul>
		</section>
		<section>
				<h2>Des châteaux de sable en kit</h2>
				<?php print_r ('<p> Quelques exemples pour épater vos enfants</p>'); ?>
				<img src="img/chateau3.png" alt="chateau de sable">
		</section>

	</main>
</body>
