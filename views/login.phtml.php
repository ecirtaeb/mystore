<?php include 'head.phtml.php'; ?>

	<main class="container">
		<h1>CONNEXION</h1>	
		<form method="POST" action="loginUser.php" class="flex login">
			<input type="text" name="login" placeholder="Votre identifiant ou votre email">
			<input type="text" name="passe" placeholder="Votre mot de passe">
			<button type="submit" id="login">Connexion</button>
		</form>
	</main>
</body>
<?php include 'footer.phtml.php'; ?>
