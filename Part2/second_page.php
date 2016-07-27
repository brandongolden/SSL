<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	Congrats - You've reached my 2nd Super Global Page!<br /><br />
	<pre>
		<?php
			print_r($_GET); //shows us the values of any SuperGlobal
		?>
	</pre>

	<?php
		$id = $_GET['id']; // store the ID from the URL in a variable called id
		echo $id;
		echo "<br />";

		$company = $_GET['company']; //store the COMPANY name from URL in a variable
		echo $company;
	?>

	<br /><br /><a href="first_page.php">Go Back</a>
</body>
</html>