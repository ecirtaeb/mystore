<?php include 'head.phtml.php'; ?>
	<main id="panier" class="container">
		<h1>Votre panier</h1>
		<section>	

			<table id="panier">
				<thead>
					<th>Nom</th>
					<th>Description</th>
					<th>Prix</th>
					<th>Supprimer</th>
				</thead>
				<?php $total = 0;
				 for ($i = 0 ; $i < strlen($cart) ; $i++): ?>
				<?= 
					$id=intval($cart[$i]); 
					$product=getproductById($id);
					$total = $total + $product['price'];
				?>
				<tr>
					<td><?=$product['name'] ?></td>
					<td><?=$product['description'] ?></td>
					<td><?=$product['price'] ?></td>
					<td><a href="#">Supprimer</a></td>
				</tr>		
				<?php endfor; ?>
				<tfooter>
					<td colspan="2">Total</td>
					<td><?php $total ?></td>
				</footer>
			</table>
		</section>
	</main>
</body>
<?php include 'footer.phtml.php'; ?>
