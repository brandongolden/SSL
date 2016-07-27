<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		function add($val1, $val2) {
			$sum = $val1 + $val2;
			return $sum; // value $sum gets returned to variable that called the function---not the browser!
		}

		$result1 = add(3,4);
		$result2 = add(5,$result1);
		echo $result2; // this is how we get it to display in browser
	?>
</body>
</html>