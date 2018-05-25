<?php include 'head.phtml.php'; ?>
	<main id="retourRecherche" class="container">
		<h1>Resultat de la recherche</h1>
		<?php echo('Vous recherchiez : <span>' . $rech) . '</span>' ?>
		<?php if ( count($products) == 0 ): ?>
			<p>Nous n'avons rien trouvé qui corresponde</p>
		<?php else : ?>
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
		<?php endif  ?>
	</main>
</body>
<?php include 'footer.phtml.php'; ?>
