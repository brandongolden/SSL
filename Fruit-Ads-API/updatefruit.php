<?php
	// Brandon Golden
	
	$user = "root";
	$pass = "root";
	$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

	$fruitid = $_GET['id'];

	$stmt = $dbh->prepare('SELECT id, fruitname, fruitcolor, fruitimage FROM fruits WHERE id = :fruitid;');
	$stmt->bindParam(':fruitid', $fruitid);
	$stmt->execute();
	$result = $stmt->fetchall(PDO::FETCH_ASSOC);
	
	foreach ($result as $row) {
		$fruitcolor = $row['fruitcolor'];
		$fruitname = $row['fruitname'];
		//$fruitimage = $row['fruitimage'];
	}

	//echo $fruitname . ' ' . $fruitcolor . ' ' . $fruitimage;
	//die();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Update Fruit</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<h1>Fruit Database App</h1>
	<form action="update.php" enctype="multipart/form-data" method="POST">
		<h2>Update Fruit</h2>
		<input type="hidden" name="fruitid" value="<?php echo $fruitid; ?>">

		<label for="fruitname">Fruit Name:</label>
		<input type="text" name="fruitname" value="<?php echo $fruitname; ?>" required><br>

		<label for="fruitcolor">Fruit Color:</label>
		<input type="text" name="fruitcolor" value="<?php echo $fruitcolor; ?>" required><br>

		<!--
		<label for="fruitimage">fruitimage</label>
		<input type="file" name="fruitimage"><br> 
		-->

		<input type="submit" value="Update">
	</form>
</body>
</html>