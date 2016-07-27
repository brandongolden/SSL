<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php

	echo "Hello World<br />"; //String using Double Quotes
	echo "Hello World<br />"; //String using SINGLE Quotes

	$greeting = "Hello";
	$target = "World";
	$phrase = $greeting . " " . $target;
	echo $phrase;

	echo "$phrase Again<br />"; //String w/Variable Embedded
	echo '$phrase Again<br />'; //SINGLE Quotes won't work w/embedding variable names
	echo "{$phrase}Again<br />";

	?>
</body>
</html>