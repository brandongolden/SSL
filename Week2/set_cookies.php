<?php
	echo "My SSL Browser Cookie is Set!";

	$name = "SSLCookie"; //cookie names cannot contain spaces!
	$value = "1508 - Day 3";
	//Set Expiration: add seconds for 1 week = sec * sec/min * hours/day * days/week
	$expire = time() + (60*60*24*7);

	setcookie($name, $value, $expire);

	echo  "<br /><a href=unset_cookies.php>" . "Wanna UNSET Your Cookie?" . "</a>";
?>

<pre> <!-- Read current cookie(s) for this website -->
	<?php print_r($_COOKIE); ?> 
</pre>