<?php include 'head.phtml.php'; ?>
<body >
	<head>
		<nav class="flex">
			<a href="index.php"  class="active">Accueil</a>
			<a href="catalogue.php">Catalogue</a>
			<a href="panier.php">Votre panier</a>
		</nav>
		<section class="login flex">
			<a href="login.php" class="login">Vous connecter à votre compte</a>
		</section>
	</head>
	<main class="container">
		<h1>MYSTORE</h1>
		<section>
			<h2>Des jeux pour les enfants</h2>
			<ul class="flex">
				<li>Des seaux pour aller chercher de l'eau</li>
				<li>Des jeux pour les rendre heureux</li>
				<li>Des bouées pour ne pas les noyer</li>
			</ul>
		</section>
		<section>
				<h2>Des châteaux de sable en kit</h2>
				<?php print_r ('<p> Quelques exemples pour épater vos enfants</p>'); ?>
		</section>

	</main>
</body>
