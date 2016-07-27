<?php
	//Brandon Golden
	session_start();
	$_SESSION["name"] = "john";
	$_SESSION["state"] = "ny";
	$_SESSION["email"] = "goldenb@fullsail.edu";
	$name = $_SESSION["name"];
	$state = $_SESSION["state"];
	$email = $_SESSION["email"];
?>

<a href="getsession.php?name=<?php echo $name; ?>&state=<?php echo $state; ?>&email=<?php echo $email; ?>">Submit</a>