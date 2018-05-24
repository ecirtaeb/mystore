<?php 
function connexion() {

	$user ='root';
	$password ='troiswa';
//	$password= '';
	$db = new PDO('mysql:host=localhost;dbname=mystore', $user, $password);	
	$db->exec('SET NAMES UTF8');
	return $db;	
}

function login($mail,$mdp) {
	
	$db = connexion();
	$select = "SELECT * FROM user WHERE email = '$mail' and password = '$mdp'" ;
	$user = [];
	$statement = $db->prepare($select);
	$statement->execute();
	$user = $statement->fetchAll(\PDO::FETCH_ASSOC);
//	pre($user[0]);
	return $user[0];
}