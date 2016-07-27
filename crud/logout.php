<?php
// Brandon Golden

// Begin the session
session_start();

// Unset all of the session variables.
session_unset();

// Destroy the session.
session_destroy();

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Logged Out</title>
</head>

<body>
<h2>You are now logged out. See ya next time!</h2>
<a href='database_form.php'>Login</a>&nbsp;|&nbsp;
<a href='dashboard.php'>Dashboard</a>&nbsp;&nbsp;<br><br>

<pre>
	<?php
		print_r(get_defined_vars());
	?>
</pre>
</body>
</html>