<body>
	<head>
		<nav class="flex">
			<a href="index.php">Accueil</a>
			<a href="catalogue.php">Catalogue</a>
			<a href="panier.php">Votre panier</a>
		</nav>
	</head>
	<main class="container">
		<h1>CONNEXION</h1>	
		<form method="POST" action="loginUser.php" class="flex login">
			<input type="text" id="login" name="login" placeholder="Votre identifiant">
			<input type="text" id="psw" name="passe" placeholder="Votre mot de passe">
			<button type="submit" id="login">Connexion</button>
		</form>
	</main>
</body>
