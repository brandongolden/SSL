<?php

	// Brandon Golden
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {


		function fruit_image() { //New function that handle the form avatar
			$tmp_file = $_FILES['fruitimage']['tmp_name']; //Temporary file name

			$target_file = basename($_FILES['fruitimage']['name']); //The file name
			$upload_dir = "images"; //Upload directory

			//If the avatar image was uploaded successfully display the image else display error message
			if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)) {
				//$message = "File uploaded successfully.";
				$message = "<img src='" . $upload_dir . "/" . $target_file . "' width='300'/>";


				$fruitname = $_POST['fruitname'];
				$fruitcolor = $_POST['fruitcolor'];
				$fruitimage = $target_file;

				$user = "root";
				$pass = "root";
				$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

				$stmt = $dbh->prepare("INSERT INTO fruits (fruitname, fruitcolor, fruitimage) VALUES (:fruitname, :fruitcolor, :fruitimage);");
				$stmt->bindParam(':fruitname', $fruitname);
				$stmt->bindParam(':fruitcolor', $fruitcolor);
				$stmt->bindParam(':fruitimage', $fruitimage);
				$stmt->execute();


			} else {
				$message = "File NOT uploaded successfully.";
			}

			return $message; //Return avatar image or error message
		} //function

		$fruitimage = fruit_image();
		//echo $fruitimage;
	} //POST

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Fruit Database App</title>

	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<h1>Fruit Database App</h1>
	<form action="fruits.php" enctype="multipart/form-data" method="POST">
		<h2>Add Fruit</h2>
		<label for="fruitname">Fruit Name:</label><br>
		<input type="text" name="fruitname" required><br>

		<label for="fruitcolor">Fruit Color:</label><br>
		<input type="text" name="fruitcolor" required><br>

		<label for="fruitimage">Fruit Image:</label><br>
		<input type="file" name="fruitimage" required><br>

		<input type="submit" value="Submit">
	</form>


	<div class="results">
	<h2>Results</h2>
	<table>
	<tr>
		<th>Fruit Image</th>
		<th>Fruit Name</th>
		<th>Fruit Color</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
	<?php
		$user = "root";
		$pass = "root";
		$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);
		$stmt = $dbh->prepare('SELECT id, fruitname, fruitcolor, fruitimage FROM fruits;');
		$stmt->execute();
		$result = $stmt->fetchall(PDO::FETCH_ASSOC);

		foreach ($result as $row) {
			/*echo 'Name: ' . $row['fruitname'] . ' Color: ' . $row['fruitcolor'] . ' ' . '<a href="deletefruit.php?id='.$row['id'].'">Delete</a>' . ' ' . '<a href="updatefruit.php?id='.$row['id'].'">Update</a>' . '<br>';*/

			echo '<tr>' .
				 '<td>' . '<a href="images/' . $row['fruitimage'] .'" />View Image' . '</a></td>'.
				 '<td>' . $row['fruitname'] . '</td>'.
				 '<td>' . $row['fruitcolor'] . '</td>'.
				 '<td>' . '<a href="updatefruit.php?id='.$row['id'].'" class="button updateButton">Update</a>' . '</td>'.
				 '<td>' . '<a href="deletefruit.php?id=' . $row['id'] . '&amp;fruitimage=' . $row['fruitimage'] .'" class="button deleteButton">Delete</a>' . '</td>'.
				 '</tr>';
		}
	?>
	</table>
	</div>

</body>
</html>