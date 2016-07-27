<?php
	// Sessions use cookies; Cookies use headers.
	// Sessions must start before any HTML output
	// ----unless output buffering is turned on.
	session_start();
?>

<?php
	$_SESSION["first_name"] = "Fialishia";
	$name = $_SESSION["first_name"];
	echo "Welcome to My Session, " . $name . "!";
?>

<pre>
	<?php print_r($_SESSION); ?>
</pre>