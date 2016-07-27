<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		//Brandon Golden
		$name = "Brandon";
		$age = 23;

		$person = array("name" => $name, "age" => $age);
		
		echo "My name is " . $person["name"] . " and age is " . $person["age"] . ".";

		echo "<br />";

		echo "My name is {$name} and age is {$age}.";
		echo "<br />";
		echo 'My name is ' . $name . ' and age is ' . $age . '.';
		$personindex = array($name, $age);
		echo "<br />";
		echo "My name is " . $personindex[0] . " and age is " . $personindex[1] . ".";
		echo "<br />";
		echo "My name is " . $person["name"] . " and age is " . $person["age"] . ".";

		$age = null;
		//echo $age;

		unset($name);
		//echo $name;

		echo "<br />";
		echo "My name is $name and age is $age.";

	?>
</body>
</html>