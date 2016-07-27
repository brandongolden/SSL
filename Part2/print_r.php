<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<pre>
		<?php
			echo "<hr>My print_r analysis report: <br><br><hr>";
			print_r(get_defined_vars());

			echo "<hr>My var_dump analysis report: <br><br><hr>";
			var_dump(get_defined_vars());

			echo "<hr>My var_dump of debug_backtrace <br><br><hr>";
			var_dump(debug_backtrace()));

			// Use $_SERVER[] to get info about your server & attributes
			echo "<hr>My server analysis report: <br><br><hr>";
			echo "SERVER_NAME: " . $_SERVER['SERVER_NAME'] . "<br />";
		?>
	</pre>
</body>
</html>