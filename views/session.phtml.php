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
