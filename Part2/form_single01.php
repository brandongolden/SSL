<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h2>Congratulations! Your Form has been processed successfully...</h2>
	<pre>
	<?php print_r($_POST); ?>
	</pre><br />

	<?php
		/*
		$username = $_POST["username"];
		$password = $_POST["password"];
		echo "<br />" . "Username: {$username}" . "<br />";
		echo "Password: {$password}";
		*/

		//using isset helps to control "reload" erros if form not submitted yet

		if (isset($_POST['submit'])) {
			echo "The following registration details were submitted:<br />";

			//set values for USERNAME or assign default if empty
			if(!empty($_POST["username"])) {
				$username = $_POST["username"];
				echo "<br />" . "Username: {$username}" . "<br />";
			} else {
				$username = " default user (no input)";
				echo "<br />" . "Username: {$username}" . "<br />";
			}

			//set values for PASSWORD or assign default if empty
			if(!empty($_POST["password"])) {
				$password = $_POST["password"];
				echo "Password: {$password}";
			} else {
				$password = " default pass (no input)";
				echo "Password: {$password}";
			}
		} else {
			echo "No form details submitted:";
			$username = " default user (no input)";
			$password = " default pass (no input)";
			echo "<br />" . "Username: {$username}" . "<br />";
			echo "Password: {$password}";
		}
	?>

	<?php require_once("form.php"); ?>
</body>
</html>