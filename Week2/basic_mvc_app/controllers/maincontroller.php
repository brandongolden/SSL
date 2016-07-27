<?php

session_start();

include("models/model.php");

$views = new Views();

// If Browser URL (form action) is NOT empty, keep going...
if(!empty($_GET['action'])) {

	// if URL (form action) = captchaForm
	if($_GET['action'] == "captchaForm") {

		// Display only the default layout
		$views->getView("views/header.php");
		$views->getView("views/form.php");
		$views->getView("views/footer.php");
	} else if($_GET["action"] == "captchaVerify") {

		// Display layout + results
		$views->getView("views/header.php");
		$views->getView("views/results.php");
		$views->getView("views/footer.php");
	} else {
		$views->getView("views/header.php");
		$views->getView("views/form.php");
		$views->getView("views/footer.php");
	}
} else {
	header("location:?action=captchaForm"); // Redirect User to captchaForm
}

?>