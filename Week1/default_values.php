<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		function paint($room="office",$color="red") {
			return "The color of Fia's {$room} is {$color}.<br />";
		}

		echo paint();
		echo paint("bedroom", "blue");
		echo paint("bedroom", null);
		echo paint("car");
		echo paint("blue"); //Logical Error - argument in wrong order
	?>
</body>
</html>