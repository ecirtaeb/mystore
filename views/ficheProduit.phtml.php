<?php include 'head.phtml.php'; ?>

	<main id="catalogue" class="container">
		<h1>Fiche produit</h1>
		<section id="produit" class="flex">
			<?php $product = getproductById($id) ?>		
			<img src="img/<?=$product['photo'] ?>" alt="Pas de photo">
			<article class="flex width50">
				<h2 class="width50"><?=$product['name'] ?> </h2>
				<p class="width50"> <?=$product['description'] ?></p>
				<p class="width50"> <span><?=$product['quantity'] ?></span> en stock</p>
				<p class="width50"> Prix : <span><?=$product['price'] ?></span></p>
				<a href="ajoutPanier.php?id=<?=$product['id']?>" class="width50">Ajouter au panier allez !!!</a>
			</article>
		</section>
	</main>
</body>
<?php include 'footer.phtml.php'; ?>
