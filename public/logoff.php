<?php
include '../services/bootstrap.php';

$cart = [];
$cart = $_SESSION['cart'] ;
session_destroy(); 
$_SESSION['cart'] = [];
$_SESSION['cart'] = $cart;

header('location:home.php');
