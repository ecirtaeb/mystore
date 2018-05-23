<?php
include '../services/tools.php';
include '../services/mystoreServices.php';
session_destroy();  
SESSION ['firstname'] = null;  /// session_destroy n'a pas trop marché...il doit manquer quelque chose

header('location:catalogue.php');
