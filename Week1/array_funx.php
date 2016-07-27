<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		$numbers = array(4,8,15,16,23,42);

		echo "Count: " . count($numbers) . "<br />";
		echo "Max value: " . max($numbers) . "<br />";
		echo "Min value: " . min($numbers) . "<br />";

		echo "<pre>";
		echo "Sort: " . sort($numbers) . print_r($numbers) . "<br />";
		echo "Reverse sort: " . rsort($numbers) . print_r($numbers) . "<br />";
		echo "</pre>";

		echo "Implode: " . $num_string = implode(" * ", $numbers) . "<br />";
		echo "Explode: " . print_r(explode(" * ", $num_string)) . "<br />";

		echo "15 in array?: " . in_array(15, $numbers) . "<br />";
		echo "19 in array?: " . in_array(19, $numbers) . "<br />";
	?>
</body>
</html>