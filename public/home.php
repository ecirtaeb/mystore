<?php
include '../services/bootstrap.php';

if (!isset($_SESSION['panier'])) {
	$_SESSION ['panier'] = 0;
	$_SESSION['cart'] = "";
}
include '../views/home.phtml.php';