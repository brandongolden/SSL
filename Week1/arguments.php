<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		function say_hello_to($word) {
			echo "Hello {$word}!<br />";
		}

		//Passing in a variable with a different name
		$name = "SSL Developers @ Full Sail";
		say_hello_to($name);


		function better_hello($greeting, $target, $punct) {
			echo $greeting . " " . $target . $punct . "<br />";
		}

		better_hello("Hello", $name, "!");
		better_hello("Greetings", $name, "!!!");
		better_hello("Goodbye", $name, null);
	?>
</body>
</html>