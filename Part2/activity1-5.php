<?php
	//Brandon Golden

	$fullsailEmail = $_POST["fullsail"];
	$personalEmail = $_POST["personal"];


	if(filter_var($personalEmail, FILTER_VALIDATE_EMAIL)){
		echo "Valid Personal Email ";
	} else {
		echo "Invalid Personal Email ";
	}

	echo $personalEmail;
	echo "<br />";

	if(preg_match("/fullsail.edu/", $fullsailEmail)){
		echo "Valid Full Sail Email ";
	} else {
		echo "Invalid Full Sail Email ";
	}

	echo $fullsailEmail;
?>