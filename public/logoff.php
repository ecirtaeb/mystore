<?php
include '../services/bootstrap.php';

session_destroy();  

header('location:home.php');
