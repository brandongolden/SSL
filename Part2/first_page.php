<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	Welcome to my 1st Super Global Page!<br /><br />

	<?php
		$link_name = "Visit Second Page";
		$id = 2015;
		$company = "Full Sail is a great school!";
	?>

	<a href="second_page.php?id=<?php echo $id; ?>&company=<?php echo $company; ?>"><?php echo $link_name; ?></a>
</body>
</html>