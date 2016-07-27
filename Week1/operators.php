<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		$a = 4;
		$b = 3;
		$c = 1;
		$d = 20;

		if (($a >= $b) || ($c >= $d)) {
			echo "a is larger than b OR ";
			echo "c is larger than d";
		}

		$e = 100;
		if (!isset($e)) {
			$e = 200;
		}
		echo $e;

		// don't reject 0 or 0.0 --or other empty form values
		$quantity = "";
		if (empty($quantity) && !is_numeric($quantity)) {
			echo "You must enter a quantity.";
		}
	?>
</body>
</html>