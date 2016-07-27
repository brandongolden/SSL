<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		$a = 3;
		$b = 4;

		if ($a > $b) {
			echo "a is larger than b";
		}


		$new_user = true;
		if ($new_user) {
			echo "<h1>Welcome</h1>";
			echo "<p>We are glad you decided to join us.</p>";
		}


		$numerator = 20;
		$denominator = 0;
		$result = 0;
		if ($denominator > 0) {
			$result = $numerator / $denominator;
		}
		echo "Result: {$result}";
	?>
</body>
</html>