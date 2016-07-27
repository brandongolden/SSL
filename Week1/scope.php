<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		$bar = "outside"; // global scope
		function fia_foo() {
			global $bar; // Allow GLOBAL $bar inside this function

			if (isset($bar)) {
				echo "fia_foo: " . $bar . "<bar />";
			}

			$bar = "inside"; // LOCAL scope--because key word "global" not
							 // used. Even though it uses the same name, its
							 // local
		}

		echo "1: " . $bar . "<br />";
		fia_foo();
		echo "<br />";
		echo "2: " . $bar . "<br />";
	?>
</body>
</html>