<?php
include '../services/mystoreServices.php';

$login = $_POST['login'];
$client = login($login);

header('location:catalogue.php');

include '../views/head.phtml.php';
include '../views/login.phtml.php';