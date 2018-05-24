<?php
include '../services/bootstrap.php';

if ( count($_POST) == 0) {
	header('location:accueil.php?message=110');
	exit;
}

$login = $_POST['login'];

$userconnect = login($_POST['login'],$_POST['passe']);

if ( count($userconnect) == 0 ) {
	header('location:catalogue.php?message=111');
	exit;
}

$_SESSION ['id'] = $userconnect['id'];
$_SESSION ['panier'] = 0;
$_SESSION['cart'] = [];

header('location:catalogue.php');
