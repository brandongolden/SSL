<?php
	// Brandon Golden
	
	$user = "root";
	$pass = "root";
	$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

	$fruitid = $_GET['id'];

	$stmt = $dbh->prepare("DELETE FROM fruits WHERE id = :fruitid;");
	$stmt->bindParam(':fruitid', $fruitid);
	$stmt->execute();
	
	header('Location: fruits.php');
	die();
?>