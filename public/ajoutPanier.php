<?php
include '../services/bootstrap.php';

$id = $_GET['id'];

if ( isset($_SESSION['cart']) ) {

	$_SESSION['cart'][] = $id;

} else {

	$_SESSION['cart'] = [];
}

//include '../views/voirPanier.phtml.php';
header('location:catalogue.php');
