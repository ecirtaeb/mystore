<?php 
//  fonctions de connexion/user

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

function infoUser ($id) {

	$db = connexion();
	$select = "SELECT * FROM user where id like '%{$id}%'";
	$user = [];
	$statement = $db->prepare($select);
	$statement->execute();
	$user = $statement->fetch(\PDO::FETCH_ASSOC);
	
	return $user;
}

//  autres fonctions

function allProducts() {
	
	$db = connexion();
	$select = "SELECT * FROM product";
	$products = [];
	$statement = $db->prepare($select);
	$statement->execute();
	$products = $statement->fetchAll(\PDO::FETCH_ASSOC);
	
	return $products;
}

function findProduct($quoi) {
	
	$db = connexion();
	$select = "SELECT * FROM product where description like '%{$quoi}%'";
	$products = [];
	$statement = $db->prepare($select);
	$statement->execute();
	$products = $statement->fetchAll(\PDO::FETCH_ASSOC);
	
	return $products;
}

/*
function showCart($panier) {
	
	$db = connexion();
	$select = "SELECT * FROM cart";
	$cart = [];
	$statement = $db->prepare($select);
	$statement->execute();
	$cart = $statement->fetchAll(\PDO::FETCH_ASSOC);
	
	return $cart;

}
*/

/*
INSERT INTO `product` (`id`, `name`, `price`, `description`, `photo`, `quantity`, `is_active`) VALUES (NULL, 'château de sable modèle 2', '25', 'kit comprenant un sac de sable et le plan de construction Photo non contractuelle', 'chateau2.png', '10', '1')
*/
