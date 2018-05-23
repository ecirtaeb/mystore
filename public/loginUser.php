<?php
include '../services/tools.php';
include '../services/mystoreServices.php';
session_start();


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
$_SESSION ['email'] = $userconnect['email'];
$_SESSION ['firstname'] = $userconnect['firstname'];

header('location:catalogue.php');
