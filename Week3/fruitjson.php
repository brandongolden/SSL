<?php

// Brandon Golden

$user = "root";
$pass = "root";
$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);



$stmt = $dbh->prepare('SELECT id, fruitname, fruitcolor FROM fruits;');
$stmt->execute();
$result = $stmt->fetchall(PDO::FETCH_ASSOC);



echo json_encode($result);

?>