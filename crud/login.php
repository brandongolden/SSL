<?php

session_start();

if (isset($_SESSION['user_id'])) {
	echo 'Session Status: User is already logged in<br/>';
}

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title></title>
</head>

<body>

<?php
// Brandon Golden

// Setup DB Username & Password
$user = 'root';
$pass = 'root';
$salt = "SuperFIASaltHash";

// Establish PDO & DSN Connection to Database
$dbh = new PDO('mysql:host=localhost;dbname=ssl;port8889', $user, $pass);

// Test if 1st form has the empty fields;
// If not, grab the username & password & bind to DB parameters
if ($_POST['username_li'] != null && $_POST['password_li'] != null) {

	// Grab Form Input
	$usernameInput = $_POST['username_li'];
	$passwordInput = md5($_POST['password_li'] . $salt);

	// Prepare the statement; Find the record that matches the username & password;
	$sth = $dbh->prepare('SELECT userid, username, password, avatar FROM users101 WHERE username = :username and password = :password');
	$sth->bindParam(':username', $usernameInput);
	$sth->bindParam(':password', $passwordInput);
	$sth->execute();
	$result = $sth->fetchAll();

	// If the result of the 1st array item contains a 'userid',
	// let the user know they have successfully logged in.
	if (isset($result[0]['userid'])) {

		// BEGIN Session Processor
		// Grab results of earlier select statement
		$user_id = $result[0]['userid'];
		$avatarfile = $result[0]['avatar'];

		/* set the session user_id variable & others */
		$_SESSION['user_id'] = $user_id;
		$_SESSION['user_name'] = $usernameInput;
		$_SESSION['pass_word'] = $passwordInput;
		$_SESSION['avatar_file'] = $avatarfile;
		echo 'Session Check: You are now logged in<br /><br />';
		// END SESSION Processor

		echo "Congratulations!!! You have successfully logged in. Enjoy :-)<br>";
		echo "<a href='logout.php'>Logout</a>&nbsp;|&nbsp;";
		echo "<a href='dashboard.php'>Dashboard</a>&nbsp;&nbsp;<br><br>";

		// Use userid to look up username & profile photo
		foreach ($result as $row) {
			// Prepare/Bind/Execute and grab results to echo $row['userid'] . "<br>";
			$sth = $dbh->prepare('SELECT username, avatar from users101 WHERE userid = :userid');
			$sth->bindParam(':userid', $row['userid']);
			$sth->execute();
			$result = $sth->fetchAll();

			// Store each row found in the $results
			echo "<p>";
			$userid = $row['userid'];
			foreach ($result as $row) {
				$photo = $row['avatar'];
				$username = $row['username'];
			};

			// echo out the profile photo and give user an option to logout.
			if (!empty($photo)) {
				echo "<img src=\"uploads/" . $photo . "\" width=\"200\" class=\"right userPhoto\"/><br>";
			} else {
				echo "AVATAR STATUS: You did not provide an avatar photo during sign-up.";
			}

			echo "</p>";
			echo "<ul class=\"right userSection\">
					<li>Your User ID is: ".$userid."</li>
					<li>You Username is: ".$username."</li>
					</ul>";
		}; // Close out the FIRST (1st) Foreach LOOP!
	} else {
		// else let user know that their login failed!
		echo "So Sorry - Your Login Failed! <br>The User Name or Password is incorrect. Please try again...<br>";
		echo "<a href='database_form.php'>Go Back?</a><br><br>";
	} // Close out the INNER "IF" statement (2nd IF statement)
} else {
	echo "Sorry, you must submit both LOGIN fields to proceed.<br><br>";
	echo "<a href='database_form.php'>Try again?</a><br><br>";
} // Close out the OUTER-Parent "IF" statement (1st IF statement)
?>

</body>
</html>