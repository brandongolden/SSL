<?php
	// Brandon Golden

	$user = "root";
	$pass = "root";
	$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$fruitname = $_POST['fruitname'];
		$fruitcolor = $_POST['fruitcolor'];
		$stmt = $dbh->prepare("INSERT INTO fruits (fruitname, fruitcolor) VALUES (:fruitname, :fruitcolor);");
		$stmt->bindParam(':fruitname', $fruitname);
		$stmt->bindParam(':fruitcolor', $fruitcolor);
		$stmt->execute();
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Fruit Database App</title>
</head>

<body>
<form action="fruits.php" method="POST">
	<label for="fruitname">fruitname</label>
	<input type="text" name="fruitname"><br>
	<label for="fruitcolor">fruitcolor</label>
	<input type="text" name="fruitcolor"><br>
	<input type="submit" value="Submit">
</form>
</body>

</html>

<?php
	$stmt = $dbh->prepare('SELECT id, fruitname, fruitcolor FROM fruits;');
	$stmt->execute();
	$result = $stmt->fetchall(PDO::FETCH_ASSOC);

	foreach ($result as $row) {
		echo 'Name: ' . $row['fruitname'] . ' Color: ' . $row['fruitcolor'] . '<td><a href="deletefruit.php?id='.$row['id'].'"> Delete</a></td>' . '<br>';
	}
?>