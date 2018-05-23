<?php
include '../services/tools.php';
include '../services/mystoreServices.php';
session_start();

$products=allProducts();

include '../views/catalogue.phtml.php';
