<?php
	//Brandon Golden
	session_start();
	$name = $_GET['name'];
	$state = $_GET['state'];
	$email = $_GET['email'];

	echo $name . " " . $state . " " . $email;
?>