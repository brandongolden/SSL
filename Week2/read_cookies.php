<br />I am reading my Cookies...<br />

<?php
// Make sure cookie EXISTS before to access them...
if (isset($_COOKIE["SSLCookie"])) {
	$test = $_COOKIE["SSLCookie"];
} else {
	$test = "Cookie NOT Set!";
}

echo "<br /><br />The value of Cookie is... " . $test;
echo "<br /><a href=unset_cookies.php" . "Wanna UNSET Your Cookie?" . "</a>";
?>

<pre>
<!-- Read current cookie(s) for this website -->
<?php print_r($_COOKIE); ?>
</pre>