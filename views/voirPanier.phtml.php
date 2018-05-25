<?php include 'head.phtml.php'; ?>
	<main id="panier" class="container">
		<h1>Votre panier</h1>
		<section>	
			<table id="panier">
				<thead>
					<th colspan="2">Article</th>
					<th>Description</th>
					<th>Prix</th>
					<th>Supprimer</th>
				</thead>
				<?php 
				$total = 0;
				$cart = $_SESSION['cart'];
				?>
				<?php foreach ($cart as $i=>$id) : ?>
					<?php
					$product=getproductById($id);
					$total += $product['price'];
					?>
					<tr>
						<td><img src="img/<?=$product['photo'] ?>" alt="<?=$product['name'] ?>"></td>
						<td><?=$product['name'] ?></td>
						<td><?=$product['description'] ?></td>
						<td class="alignRight"><?=$product['price'] ?></td>
						<td><a href="suppressionPanier.php?i=<?=$i?>">Supprimer</a></td>
					</tr>
				<?php endforeach; ?>
				<tfoot>
					<td colspan="3">Total</td>
					<td><?=$total?></td>
				</tfoot>		
			</table>
		</section>
	</main>
</body>
<?php include 'footer.phtml.php'; ?>