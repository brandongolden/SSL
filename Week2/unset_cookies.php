<?php
// Three ways to unset cookies:
// 1. setcookie($name); no value for 2nd parameter;
// 2. setcookie($name, null, $expire);
// 3. setcookie($name, $value, time() - 3600);

	$name = "SSLCookie";
	setcookie($name, null, time() - 3600);
	echo "<br />Your Cookie is now UNSET! Please refresh the browser...<br />";
	echo "<a href=set_cookies.php>" . "Go set it again?" . "</a>";
?>

<pre>
<!-- Read current cookies(s) for this website -->
	<?php print_r($_COOKIE); ?>
</pre>