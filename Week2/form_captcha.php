<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>

<body>
<h2>Fia's Captcha Validation</h2>
Are you human? If so, please enter the phrase below:<br /><br />

<form action="captcha_validate.php" method="post">
	Captcha Verify:
	<input type="text" name="captcha" /><br /><br /><img src="captcha.php" />
	<br /><br />
	<input type="submit" name="submit" value="Submit" />
</form>
</body>

</html>