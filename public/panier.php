<?php
include '../services/bootstrap.php';

if ( !isset($_SESSION['cart']) || count($_SESSION['cart']) == 0 ) {

	$_SESSION['cart']=[];
	include '../views/panierVide.phtml.php';
	exit;
}
include '../views/voirPanier.phtml.php';
