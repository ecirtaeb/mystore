<?php
include '../services/bootstrap.php';

$rech = $_GET['findProduct'];

if  ( $rech == FALSE ) {

	header('location:catalogue.php');
}
$products = findProduct($rech);

include '../views/retourRecherche.phtml.php';
