<?php
	//Brandon Golden

	function form_data() { //New function that will handle the form data
		$form = []; //New associative array

		//Fill associative array with form data using the $_POST superglobal
		$form["firstname"] = $_POST["firstname"];
		$form["lastname"] = $_POST["lastname"];
		$form["username"] = $_POST["username"];

		//Encrypt and salt password using md5 then encrypt the result with sha1
		$form["password"] = sha1(md5('abcdef'.$_POST['password']));

		return $form; //Return $form array when function is called
	}

	$user = form_data(); //Call the form_data function and store the function return into the $user variable


	function form_avatar() { //New function that handle the form avatar
		$tmp_file = $_FILES['avatar']['tmp_name']; //Temporary file name

		$target_file = basename($_FILES['avatar']['name']); //The file name
		$upload_dir = "images"; //Upload directory

		//If the avatar image was uploaded successfully display the image else display error message
		if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)) {
			//$message = "File uploaded successfully.";
			$message = "<img src='" . $upload_dir . "/" . $target_file . "' width='300'/>";
		} else {
			$message = "File NOT uploaded successfully.";
		}

		return $message; //Return avatar image or error message
	}

	$userAvatar = form_avatar(); //Call the form_avatar function and store the function return into the $userAvatar variable


	/*
	echo $user["firstname"];
	echo $user["lastname"];
	echo $user["username"];
	echo $user["password"];
	*/

	//Loop through the $user array and output all values
	foreach($user as $val) {
		echo $val;
		echo "<br />";
	}

	echo "<br />";

	//Output the user avatar image
	echo $userAvatar;
?>