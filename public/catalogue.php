<?php
include '../services/tools.php';
include '../services/bootstrap.php';
include '../services/mystoreServices.php';

$products=allProducts();

include '../views/catalogue.phtml.php';
