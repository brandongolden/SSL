<?php

// Brandon Golden

$user = "root";
$pass = "root";
$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);



$stmt = $dbh->prepare('SELECT id, fruitname, fruitcolor FROM fruits;');
$stmt->execute();
$result = $stmt->fetchall(PDO::FETCH_ASSOC);



header("Content-type:text/xml");
$xmlfile = "<?xml version='1.0' encoding='UTF-8'?>";
$xmlfile .= "<fruits>";

foreach ($result as $row) {
	$xmlfile .= '<fruit>';
	$xmlfile .= '<id>' . $row['id'] . '</id>';
	$xmlfile .= '<fruitname>' . $row['fruitname'] . '</fruitname>';
	$xmlfile .= '<fruitcolor>' . $row['fruitcolor'] . '</fruitcolor>';
	$xmlfile .= '</fruit>';
}


$xmlfile .= "</fruits>";

echo $xmlfile;

?>