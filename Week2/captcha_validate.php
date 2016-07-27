<?php
session_start();
?>

<?php
	// Captcha Check //
	// Check to see if the array key "captcha" exists in $_SESSION Super Global
	
	if(array_key_exists('captcha', $_SESSION)) {
		echo "Yes, captcha exist!<br><br>";
	}

	// Store Captcha input in session Variable for Verification Later;
	$captchaInput = $_POST['captcha'];
	$captchaVerify = $_SESSION['captcha'];
	// end Captcha Overview; //


	// Check to see if the form input ($_POST) matches what's in the SESSION Variable
	if ($captchaInput == $captchaVerify) {
		echo "Congratulations!!! YOUR ARE HUMAN & your Captcha is working.<br><br>";
		echo "<a href='form_captcha.php'>Try again?</a><br><br>";
	}else{
		echo "OOPSY...Something is WRONG with your Captcha input! Sorry...<br><br>";
		echo "<a href='form_captcha.php'>Try again?</a><br><br>";
	}
?>

<pre>
<?php print_r(get_defined_vars()); ?> //shows all defined variables
</pre>