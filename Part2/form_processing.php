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
		$username = $_POST["username"];
		$password = $_POST["password"];
		echo "<br />" . "Username: {$username}" . "<br />";
		echo "Password: {$password}";
	?>
</body>
</html>