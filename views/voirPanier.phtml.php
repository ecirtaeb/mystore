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
				<?php 
				$total = 0;
				$cart = $_SESSION['cart'];
				 foreach ($cart as $key => $id) {
					$product=getproductById($id);
					$total = $total + $product['price'];
				}
				?>
				<tr>
					<td><?php $product['name'] ?></td>
					<td><?php $product['description'] ?></td>
					<td><?php $product['price'] ?></td>
					<td><a href="#">Supprimer</a></td>
				</tr>		
				<tfooter>
					<td colspan="2">Total</td>
					<td><?php $total ?></td>
				</footer>
			</table>
		</section>
	</main>
</body>
<?php include 'footer.phtml.php'; ?>