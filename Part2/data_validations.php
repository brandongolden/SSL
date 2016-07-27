<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h2>User Validation Rocks!</h2>
	<?php
		// * isset (---opposite of null & empty) Is there a value?
		// remember, even if its an empty string, there is still a value;

		$value = trim(" 0 ");
		if (!isset($value) || $value === "") {
			echo "2. PRESENCE: Whoops! Validation failed for the presence check.<br />";
			echo '$value is set to: ' . $value . "<br /><br />";
		} esle {
			echo "2. PRESENCE: Validation successful!<br />";
			echo '$value is now set to: ' . $value . "<br /><br />";
		}
	?>
</body>
</html>