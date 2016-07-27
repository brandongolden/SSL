<?php

	// Brandon Golden
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {


		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$website = $_POST['website'];


		$validationSuccessful = true;

		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			$validationSuccessful = false;
		}

		if (filter_var($website, FILTER_VALIDATE_URL) === false) {
			$validationSuccessful = false;
		}


		if ($validationSuccessful === true) {
			$user = "root";
			$pass = "root";
			$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

			$stmt = $dbh->prepare("INSERT INTO clients (firstname, lastname, phone, email, website) VALUES (:firstname, :lastname, :phone, :email, :website);");
			$stmt->bindParam(':firstname', $firstname);
			$stmt->bindParam(':lastname', $lastname);
			$stmt->bindParam(':phone', $phone);
			$stmt->bindParam(':email', $email);
			$stmt->bindParam(':website', $website);
			$stmt->execute();
		}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Contacts Manager App</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<!-- Brandon Golden -->
	<h1>Contacts Manager App</h1>
	<form action="index.php" method="POST">
		<h2>Add Client</h2>
		<label for="firstname">First Name</label><br>
		<input type="text" name="firstname" required><br>

		<label for="lastname">Last Name</label><br>
		<input type="text" name="lastname" required><br>

		<label for="phone">Phone</label><br>
		<input type="text" name="phone" required><br>

		<label for="email">Email</label><br>
		<input type="text" name="email" required><br>

		<label for="website">Website</label><br>
		<input type="text" name="website" value="http://" required><br>

		<input type="submit" value="Submit">
	</form>

	<h2>Clients</h2>
	<?php
		$user = "root";
		$pass = "root";
		$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);
		$stmt = $dbh->prepare('SELECT id, firstname, lastname, phone, email, website FROM clients ORDER BY firstname ASC;');
		$stmt->execute();
		$result = $stmt->fetchall(PDO::FETCH_ASSOC);

		foreach ($result as $row) {
			echo $row['firstname'] . ' ' .
				 $row['lastname'] . ' ' .
				 $row['phone'] . ' ' .
				 $row['email'] . ' ' .
				 $row['website'] . '<br>';
		}
	?>
</body>
</html>