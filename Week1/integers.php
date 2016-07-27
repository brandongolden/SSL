<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		$var1 = 3;
		$var2 = 4;
	?>
	Basic Math: <?php ((1 + 2 + $var1) * $var2) / 2-5; ?><br />

	Absolute Value: 	<?php echo abs(0-300);	?><br />
	Exponential: 		<?php echo pow(2, 8);	?><br />
	Square Root:		<?php echo sqrt(100);	?><br />
	Modulo:				<?php echo fmod(20, 7);	?><br />
	Random:				<?php echo rand();		?><br />
	Random (min,max):	<?php echo rand(1,10);	?><br />
	+= :				<?php $var2 += 4; echo $var2; ?><br />
	-= :				<?php $var2 -= 4; echo $var2; ?><br />
	*= :				<?php $var2 *= 3; echo $var2; ?><br />
	/= :				<?php $var2 /= 4; echo $var2; ?><br />
	Increment:			<?php $var2++; echo $var2; ?><br />
	Decrement:			<?php $var2--; echo $var2; ?><br />

	<?php
		echo 1 + "1";
		echo "<br /><br />";
		echo 1 + "2 houses";
	?>
</body>
</html>