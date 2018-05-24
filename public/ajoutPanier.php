<?php
include '../services/bootstrap.php';

$id = $_GET['id'];

if ( isset($_SESSION['cart']) ) {

	$_SESSION['panier'] = $_SESSION['panier'] + 1;
	$_SESSION['cart'][] = intval($id);

} else {

	$_SESSION['cart'] = [];
}

//include '../views/voirPanier.phtml.php';
header('location:catalogue.php');
