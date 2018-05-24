<?php
include '../services/bootstrap.php';


if ( isset($_SESSION['panier']) ) {

	$cart = $_SESSION['cart'];
	
}

include '../views/voirPanier.phtml.php';
