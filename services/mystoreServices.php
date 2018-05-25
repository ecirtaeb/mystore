<?php 

function getUserById ($id) {

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

function getProductById($id) {
	
	$db = connexion();
	$select = "SELECT * FROM product where id = {intval($id)}";
	$product = [];
	$statement = $db->prepare($select);
	$statement->execute();
	$product = $statement->fetch(\PDO::FETCH_ASSOC);
	
	return $product;
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
