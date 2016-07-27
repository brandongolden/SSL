<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		$a = 2;

		switch ($a) {
			case 0:
				echo "a equals 0<br />";
				break; //stops switch from evaluating more
			case 1:
				echo "a equals 1<br />";
				break;
			case 2:
				echo "a equals 2<br />";
				break;
			case 3:
				echo "a equals 3<br />";
				break;
			default:
				echo "a is not 0, 1, 2, or 3<br />";
				break;
		}
	?>
</body>
</html>