<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		//Brandon Golden

		function grade($word) {
			if ($word > 90 && $word <= 100) {
				$g = "A";
			} elseif ($word >= 80) {
				$g = "B";
			} elseif ($word >= 70) {
				$g = "C";
			} elseif ($word >= 60) {
				$g = "D";
			} elseif ($word < 60) {
				$g = "F";
			}
			return $g;
		}

		$result = grade(60.01);
		echo $result;
	?>
</body>
</html>