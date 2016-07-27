<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		function add_subt($val1, $val2) {
			$add = $val1 + $val2;
			$subt = $val1 - $val2;
			return array($add, $subt); // one return per function...
									   // however, you can return multiple values
		}

		$result_array = add_subt(10,5);
		echo "Add: " . $result_array[0] . "<br />"; //Echo the Array Key/Value
		echo "Subt: " . $result_array[1] . "<br />";


		list($add_result, $subt_result) = add_subt(20,7);
		echo "Add: " . $add_result . "<br />";		//NO Array keys required
		echo "Subt: " . $subt_result . "<br />";	//NO Array keys required
	?>
</body>
</html>