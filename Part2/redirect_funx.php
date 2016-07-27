<?php
	//This is how you redirect to a new page with a function
	//HTTP Header has to be updated before ALL other spaces, PHP, and HTML
	function redirect_to($new_location) {
		header("Location: " . $new_location);
	exit;
	}

	$logged_in = $_GET['logged_in'];

	//Test in browser by changing the URL to ?Logged_in = 0 (not logged) -- or 1 (logged in)

	if ($logged_in == "1") {
		redirect_to("first_page.php"); //Browser Test: redirect.php?logged_in=1
	} else {
		redirect_to("http://www.fullsail.com"); //Browser Test: redirect.php?logged_in=0
	}
?>