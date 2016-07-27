<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php echo $float = 3.14; ?><br />
	<?php echo $float + 7; ?><br />
	<?php echo 4/3; ?><br />

	Round:		<?php echo round($float, 1);	?><br />
	Ceiling:	<?php echo ceil($float);		?><br />
	Floor: 		<?php echo floor($float);		?><br />

	<?php 
		$integer = 3;
		echo "Is {$integer} integer? " . is_int($integer); 
		echo "<br />";
		echo "Is {$float} integer? " . is_int($float);
		echo "<br />";
		echo "Is {$integer} numeric? " . is_numeric($integer);
		echo "<br />";
		echo "Is {$float} numeric? " . is_numeric($float); ?><br />
	?>

</body>
</html>