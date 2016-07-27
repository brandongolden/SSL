<?php
	// Brandon Golden
	
	$user = "root";
	$pass = "root";
	$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

	$fruitid = $_GET['id'];
	$fruitimage = $_GET['fruitimage'];

	$path = 'images/' . $fruitimage;
	$r = unlink($path);
	if ($r === false)
	{
	    echo 'Unable to delete file';
	}

	
	$stmt = $dbh->prepare("DELETE FROM fruits WHERE id = :fruitid;");
	$stmt->bindParam(':fruitid', $fruitid);
	$stmt->execute();

	header('Location: fruits.php');
	die();
?>