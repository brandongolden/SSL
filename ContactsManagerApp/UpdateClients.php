<?php
	// Brandon Golden
	session_start();


	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$clientid = $_POST['clientid'];
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

		$phone = preg_replace('/[^0-9]/', '', $_POST['phone']);
		if((strlen($phone) === 10) === false) {
		    //Phone is 10 characters in length (###) ###-####
		    $validationSuccessful = false;
		}

		if ($validationSuccessful === false) {
			$_SESSION["message"] = "Update not successful";
		}

		if ($validationSuccessful === true) {

			$user = "root";
			$pass = "root";
			$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

			$stmt = $dbh->prepare("
			UPDATE clients  
	  	 	SET 
	  	 	firstname = :firstname,
	       	lastname = :lastname,
	       	phone = :phone,
	       	email = :email,
	       	website = :website
	 		WHERE 
	 		id = :clientid;
	 		");
	 		$stmt->bindParam(':clientid', $clientid);
			$stmt->bindParam(':firstname', $firstname);
			$stmt->bindParam(':lastname', $lastname);
			$stmt->bindParam(':phone', $phone);
			$stmt->bindParam(':email', $email);
			$stmt->bindParam(':website', $website);
			$stmt->execute();

			$_SESSION["message"] = "Update Successful";		
			header('Location: index.php');
		} else {
			$_SESSION["message"] = "Update Not Successful";		
		}

	} else {
	
		$user = "root";
		$pass = "root";
		$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

		$clientid = $_GET['id'];

		$stmt = $dbh->prepare('SELECT id, firstname, lastname, phone, email, website FROM clients WHERE id = :clientid;');
		$stmt->bindParam(':clientid', $clientid);
		$stmt->execute();
		$result = $stmt->fetchall(PDO::FETCH_ASSOC);
		
		foreach ($result as $row) {
			$firstname = $row['firstname'];
			$lastname = $row['lastname'];
			$phone = $row['phone'];
			$email = $row['email'];
			$website = $row['website'];
		}

	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Update Client</title>
	<link rel="stylesheet" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="js/main.js"></script>
</head>
<body>
	<?php
		if (isset($_SESSION['message'])) {
		//echo $_SESSION['message'];
		//$_SESSION['message'] = null;

		if ($_SESSION['message'] == "Successful" || $_SESSION['message'] == "Delete Successful" || $_SESSION['message'] == "Update Successful" ) {
			echo '<div class="message" style="background: green;">' . $_SESSION['message'] . '</div>';
		} else {
			echo '<div class="message" style="background: red;">' . $_SESSION['message'] . '</div>';
		}
		//$_SESSION['message'] = null;
	}

	?>
	<div id="h"></div>
	<div id="container">
	<h1>Contacts Manager App</h1>
	<form action="UpdateClients.php" method="POST">
		<h3>Update Client</h3>
		<input type="hidden" name="clientid" value="<?php echo $clientid; ?>">

		<label for="firstname">First Name</label><br>
		<input type="text" name="firstname" value="<?php echo $firstname; ?>" required><br>

		<label for="lastname">Last Name</label><br>
		<input type="text" name="lastname" value="<?php echo $lastname; ?>" required><br>

		<label for="phone">Phone</label><br>
		<input type="text" name="phone" value="<?php echo $phone; ?>" required><br>

		<label for="email">Email</label><br>
		<input type="text" name="email" value="<?php echo $email; ?>" required><br>

		<label for="website">Website</label><br>
		<input type="text" name="website" value="<?php echo $website; ?>" required><br>

		<div class="formButtons">
			<a href="index.php" class="myButton">Cancel</a>
			<input type="submit" value="Update" class="myButton">
		</div>
	</form>	

	<div id="contactsContainer">
	<h2>Update</h2>
	<div class="contact">
		<div class="contactName"><?php echo $firstname . ' ' . $lastname; ?></div>
		<div class="contactPhone"><?php echo  "(".substr($phone, 0, 3).") ".substr($phone, 3, 3)."-".substr($phone,6) ; ?></div>
		<div class="contactEmail"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div>
		<div class="contactWebsite"><a href="<?php echo $website; ?>"><?php echo $website; ?></a></div>
	</div>
	</div>


	<div id="footer">&copy; 2016 Brandon Golden | <a href="http://www.fatcow.com/free-icons">http://www.fatcow.com/free-icons</a> | <a href="https://flic.kr/p/awLFxd">https://flic.kr/p/awLFxd</a></div>

	</div>	

</body>
</html>