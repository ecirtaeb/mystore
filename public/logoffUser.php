<?php
include '../services/bootstrap.php';

//session_destroy(); 
$_SESSION('id') = "";

header('location:home.php');
