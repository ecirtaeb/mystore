<?php
include '../services/mystoreServices.php';


if ( count($_POST) == 0) {
	header('location:accueil.php message=110');
	exit;
}

$login = $_POST['login'];
$client = login($_POST['login'],$_POST['passe']);

if ( count($client == 0) ) {
	header('location:catalogue.php message=111');
	exit;
}

header('location:catalogue.php');
