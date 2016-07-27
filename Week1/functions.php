<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		function say_hello() { //function without arguments
			echo "Hey Full Sailors!<br />";
		}

		say_hello();

		function say_hello_to($word) { //function with argument
			echo "Hello {$word}!<br />";
		}

		say_hello_to("Class of 2015");
		say_hello_to("SSL Developers");
	?>
</body>
</html>