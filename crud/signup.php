<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title></title>
</head>

<body>

<?php
// Brandon Golden

// If the form is not set - do nothing
if (isset($_POST['submit'])) {

	// Check to see if username, password, avatar is null
	if ($_POST['password'] != null && $_POST['user'] != null) {

		// Read in all form fields into an "associate" array & return the array for processing output
		function makeArray() 
		{
			$salt = "SuperFIASaltHash";
			$epass = md5($_POST['password'] . $salt);
			$euser = $_POST['user'];

			return array("USER NAME" => $euser, "Hashed PASSWORD with Dash of Salt" => $epass);
		}

		// Output Login Details to User

		echo "<h2>CONGRATULATIONS!</h2>Your membership account sign-up was successfull!";
		echo "<table width=100% align=left border=0><tr><td>";

		// CONVERT array into a variable
		$data = makeArray();

		// FOREACH for displaying Array Contents created in makeArray Function
		foreach ($data as $attribute => $data) {
			echo "<p align=left><font color = #FF4136>{$attribute}</font>: {$data}";
		}

		// Process Avatar Photo for Upload
		$tmp_file = $_FILES['avatarfile']['tmp_name'];
		// Given a string containing the path to a file/directory,
		// the basename function will return the trailing name component.
		$target_file = basename($_FILES['avatarfile']['name']);
		$upload_dir = "uploads";

		// move_uploaded_file will return false if $tmp_file is not a valid upload file
		// or if it cannot be moved for any other reason
		if (move_uploaded_file($tmp_file, $upload_dir . "/" . $target_file)) {
			echo "File uploaded successfully.";
			echo "<br /><br />Your Avatar Photo: " . $target_file;
			echo "<br /><br /><img src='" . $upload_dir . "/" . $target_file . "' width='200' />";
		} else {
			echo "<br /><br />AVATAR: No photo was uploaded.";
		}

		echo "<br /><br /><a href='database_form.php'>Please try logging in Now!</a>";

		echo "</td></tr></table>";


		// Setup DB Username & Password
		$user = 'root';
		$pass = 'root';

		// Establish PDO & DSN Connection to Database
		$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

		$salt = "SuperFIASaltHash";
		$epass = md5($_POST['password'] . $salt);
		$euser = $_POST['user'];

		// Prepare statement for INSERT
		$stmt = $dbh->prepare("INSERT INTO users101 (username, password, avatar)VALUES(:username, :password, :avatar)");
		$stmt->bindParam(':username', $euser);
		$stmt->bindParam(':password', $epass);
		$stmt->bindParam(':avatar', $target_file);
		$stmt->execute();

	} else {
		echo "Sorry, you must submit ALL registration fields to proceed.<br><br>";
		echo "<a href='form.php'>Try again?</a><br><br>";
	}
}

?>

</body>
</html>