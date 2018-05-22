<?php
include '../services/mystoreServices.php';

$products=allProducts();

include  '../views/head.phtml.php';
include '../views/catalogue.phtml.php';
