<?php include 'head.phtml.php'; ?>

	<main id="catalogue" class="container">
		<h1>Fiche produit</h1>
		<section id="produit">
			<?php $product = getproductById($id) ?>		
				<img src="img/<?=$product['photo'] ?> " alt="Pas de photo">
				<article class="flex width40">
					<h2><?=$product['name'] ?> </h2>
					<p> <?=$product['description'] ?></p>
					<p><span><?=$product['quantity'] ?></span> articles en stock</p>
					<p> Prix : <span><?=$product['price'] ?></span></p>
					<a href="ajoutPanier.php?id=<?=$product['id']?>" >Ajouter au panier allez !!!</a>
				</article>
				<div class="clear"></div>
		</section>
	</main>
</body>
<?php include 'footer.phtml.php'; ?>
