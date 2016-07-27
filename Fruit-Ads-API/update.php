<?php

	// Brandon Golden
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$fruitid = $_POST['fruitid'];
		$fruitname = $_POST['fruitname'];
		$fruitcolor = $_POST['fruitcolor'];
		echo $fruitname;

		$user = "root";
		$pass = "root";
		$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

		$stmt = $dbh->prepare("
		UPDATE fruits  
  	 	SET 
  	 	fruitname = :fruitname,
       	fruitcolor = :fruitcolor
 		WHERE 
 		id = :fruitid;
 		");
 		$stmt->bindParam(':fruitid', $fruitid);

		$stmt->bindParam(':fruitname', $fruitname);
		$stmt->bindParam(':fruitcolor', $fruitcolor);
		$stmt->execute();

		header('Location: fruits.php');
	} else {
		header('Location: fruits.php');
	}

?>