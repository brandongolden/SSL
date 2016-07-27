<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	Type Juggling<br />
	<?php
		$count = "2 cats";
	?>
	Type: <?php echo gettype($count); ?><br />

	<?php $count += 3; ?>
	Type: <?php echo gettype($count); ?><br />

	<?php $cats = "I have " . $count . " cats."; ?>
	Cats: <?php echo gettype($cats); ?><br />

</body>
</html>