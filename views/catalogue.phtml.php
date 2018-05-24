<?php include 'head.phtml.php'; ?>

	<main id="catalogue" class="container">
		<h1>Notre catalogue</h1>
		<section class="catalogue">		
			<ul class="flex">
				<?php foreach ($products as $product) : ?>
					<li>
						<img src="img/<?=$product['photo'] ?>" alt="Pas de photo">
						<article>
							<h3><?=$product['name'] ?></h3>
							<a href="produit.php?id=<?=$product['id']?>">Voir la chose</a>
						</article>
					</li>
				<?php endforeach; ?>
			</ul>
		</section>
	</main>
</body>
<?php include 'footer.phtml.php'; ?>
