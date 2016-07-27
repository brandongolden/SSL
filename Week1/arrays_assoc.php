<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		$assoc = array("first_name" => "Fialishia", "last_name" => "0'Loughlin");
		echo $assoc["first_name"];
		echo "<br />";
		echo $assoc["first_name"] . " " . $assoc["last_name"];
		echo "<br />";

		$assoc["first_name"] = "Michael";
		echo $assoc["first_name"] . " " . $assoc["last_name"];
		echo "<br />";

		$numbers = array(4,8,15,16,23,42);
		$numbers = array(0 => 4, 1 => 8, 2 => 15, 3 => 16, 4 => 23, 5 => 42);

		echo $numbers[0];
	?>
</body>
</html>