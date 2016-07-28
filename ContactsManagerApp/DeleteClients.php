<?php
	// Brandon Golden
	session_start();
	
	$user = "root";
	$pass = "root";
	$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

	$clientid = $_GET['id'];
	
	$stmt = $dbh->prepare("DELETE FROM clients WHERE id = :clientid;");
	$stmt->bindParam(':clientid', $clientid);
	$stmt->execute();

	$_SESSION["message"] = "Delete Successful";
	header('Location: index.php');
	die();
?>