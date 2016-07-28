<?php
	// Brandon Golden
	session_start();

	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {


		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$website = $_POST['website'];

		$_SESSION['firstname'] = "";
		$_SESSION['lastname'] = "";
		$_SESSION['phone'] = "";
		$_SESSION['email'] = "";
		$_SESSION['website'] = "";

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
			$_SESSION["message"] = "Not successful";

			$_SESSION['firstname'] = $firstname;
			$_SESSION['lastname'] = $lastname;
			$_SESSION['phone'] = $phone;
			$_SESSION['email'] = $email;
			$_SESSION['website'] = $website;
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

			$_SESSION["message"] = "Successful";

		}

	}

	/*if (isset($_SESSION['message'])) {
		//echo $_SESSION['message'];
		$_SESSION['message'] = null;
	}*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Contacts Manager App</title>

	<link rel="stylesheet" href="css/main.css">

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="js/main.js"></script>
</head>
<body>
	<!-- Brandon Golden -->

	<?php
		if (isset($_SESSION['message'])) {
			if ($_SESSION['message'] == "Successful" || $_SESSION['message'] == "Delete Successful" || $_SESSION['message'] == "Update Successful" ) {
				echo '<div class="message" style="background: green;">' . $_SESSION['message'] . '</div>';
			} else {
				echo '<div class="message" style="background: red;">' . $_SESSION['message'] . '</div>';
			}
			$_SESSION['message'] = null;
		}
	?>

	<div id="container">
	<h1>Contacts Manager App</h1>



	<form action="index.php" method="POST">
		<h3>Add Client</h3>

		<label for="firstname">First Name</label><br>
		<input type="text" name="firstname" value='<?php echo $_SESSION["firstname"];?>' required><br>

		<label for="lastname">Last Name</label><br>
		<input type="text" name="lastname" value='<?php echo $_SESSION["lastname"];?>' required><br>

		<label for="phone">Phone</label><br>
		<input type="text" name="phone" value='<?php echo $_SESSION["phone"];?>' required><br>

		<label for="email">Email</label><br>
		<input type="text" name="email" value='<?php echo $_SESSION["email"];?>' required><br>

		<label for="website">Website</label><br>
		<input type="text" name="website" value='<?php echo $_SESSION["website"];?>'  required><br>

		<input type="submit" value="Submit" name="addClient" class="myButton">
	</form>



	<div id="contactsContainer">
	<h2>
	Clients

	<a href="index.php?orderby=lastnameDESC" class="orderbyButton">Last Name DESC</a>		
	<a href="index.php?orderby=lastnameASC" class="orderbyButton">Last Name ASC</a>
	<a href="index.php?orderby=firstnameDESC" class="orderbyButton">First Name DESC</a>
	<a href="index.php" class="orderbyButton">First Name ASC</a>
	</h2>

	<?php
		$user = "root";
		$pass = "root";
		$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

		if (isset($_GET['orderby'])) {
			if ($_GET['orderby'] == 'lastnameASC') {
				$stmt = $dbh->prepare('SELECT id, firstname, lastname, phone, email, website FROM clients ORDER BY lastname ASC;');
			} elseif ($_GET['orderby'] == 'lastnameDESC') {
				$stmt = $dbh->prepare('SELECT id, firstname, lastname, phone, email, website FROM clients ORDER BY lastname DESC;');
			} elseif ($_GET['orderby'] == 'firstnameDESC') {
				$stmt = $dbh->prepare('SELECT id, firstname, lastname, phone, email, website FROM clients ORDER BY firstname DESC;');
			}
		} else {
			$stmt = $dbh->prepare('SELECT id, firstname, lastname, phone, email, website FROM clients ORDER BY firstname ASC;');
		}


		$stmt->execute();
		$result = $stmt->fetchall(PDO::FETCH_ASSOC);

		foreach ($result as $row) {
			$phone = $row['phone'];
			echo '<div class="contact"><div class="contactName">' . 
				 $row['firstname'] . ' ' .
				 $row['lastname'] . '</div><div class="contactPhone">' .
				 "(".substr($phone, 0, 3).") ".substr($phone, 3, 3)."-".substr($phone,6) . '</div><div class="contactEmail">' .
				 '<a href="mailto:' . $row['email'] . '">' .
				 $row['email'] . '</a></div><div class="contactWebsite">' .
				 '<a href="' .
				 $row['website'] . '">' . $row['website'] . '</a></div>' .
				 '<a class="myButton" href="DeleteClients.php?id='.$row['id'].'">Delete</a>'.
				 ' '.
				 '<a class="myButton" href="UpdateClients.php?id='.$row['id'].'">Update</a>'.
				 '</div>';
		}
	?>
	</div>

	<div id="footer">&copy; 2016 Brandon Golden | <a href="http://www.fatcow.com/free-icons">http://www.fatcow.com/free-icons</a> | <a href="https://flic.kr/p/awLFxd">https://flic.kr/p/awLFxd</a></div>

	</div>

</body>
</html>