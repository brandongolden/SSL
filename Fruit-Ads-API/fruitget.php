<?php

// Brandon Golden

header ("Content-type:application/json");

$user = "root";
$pass = "root";
$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

$stmt = $dbh->prepare('SELECT * FROM fruits ORDER BY RAND() LIMIT  1;');
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);

?>