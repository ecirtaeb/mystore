<?php
include '../services/bootstrap.php';

$i = $_GET['i'];

if ( isset($_SESSION['cart']) ) {

	array_splice($_SESSION['cart'],$i,1);

} else {

	$_SESSION['cart'] = [];
}

//include '../views/voirPanier.phtml.php';
header('location:panier.php');
