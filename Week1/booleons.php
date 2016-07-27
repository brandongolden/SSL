<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		$result1 = true;
		$result2 = false;

		echo "Result1: " . $result1 . "<br />";
		echo "Result2: " . $result2 . "<br />";

		echo "result2 is booleon?" . is_bool($result2) . "<br />";

		$number = 3.14;
		if( is_float($number) ) {
			echo "It is a float.";
		}
	?>
</body>
</html>