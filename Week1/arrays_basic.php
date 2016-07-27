<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		$numbers = array(4,8,15,16,23,42);
		echo $numbers[0];
	?>
	<br />
	<?php $mixed = array(6, "fox", "dog", array("x", "y", "z")); ?>
	<?php echo $mixed[2]; ?><br />

	<?php
		echo $mixed[3];
		echo "<br />";
		echo $mixed;
		echo "<br />";
		echo $mixed[3][1];
		echo "<br />";

		$mixed[2] = "cat";
		$mixed[4] = "mouse";
		$mixed[] = "horse";
		echo "<pre>";
		echo print_r($mixed);
		echo "</pre>";
	?>
</body>
</html>