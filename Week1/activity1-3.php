<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		//Brandon Golden

		//Part 1
		$colors = array("Red", "Pink", "Blue", "Baby Blue", "Green", "Lime", "Yellow", "Sunflower", "Black", "Gray");
		for($count = 0; $count <= 9; $count++) {
			echo "Color " . $count . " is " . $colors[$count] . "<br />";
		}
		echo "<br />";

		//Part 2
		for($count = 9; $count >= 0; $count--) {
			echo "Color " . $count . " is " . $colors[$count] . "<br />";
		}
		echo "<br />";

		//Part 3
		for($count = 0; $count <= 8; $count++) {
			echo "Color " . $count . " is " . $colors[$count] . "<br />";
			$count++;
		}
	?>
</body>
</html>