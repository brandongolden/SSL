<?php

// Brandon Golden

$randomFruit = file_get_contents('http://localhost:8888/SSL/Fruit-Ads-API/fruitget.php');
$randomFruit = json_decode($randomFruit)[0];

/*
echo $randomFruit->fruitname;
echo $randomFruit->fruitcolor;
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title></title>
</head>
<body>
	<h1>Today's fruit <?php echo $randomFruit->fruitcolor . ' ' . $randomFruit->fruitname; ?></h1>
	<img src="images/<?php echo $randomFruit->fruitimage; ?>"/>
</body>
</html>