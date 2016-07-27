<?php
	// Optional: set on the fly... how long session should last
	// ini_set('session.gc_maxlifetime', 5 * 60);
	session_start();

	//Update the current session id with a newly generated one
	session_regenerate_id();

	// store content of dictionary into variable
	// FILE_IGNORE_NEW_LINES: Do not add newline at the end of each array element
	$file = file('dictionary.txt', FILE_IGNORE_NEW_LINES);

	// Set Length of Dictionary File & create Random Number to select from file
	$length = count($file)-1;
	$random = rand(0, $length);

	// Create session variable called captcha and store randomly selected word
	// Only write one word at a time;
	$_SESSION['captcha'] = $file[$random];
	session_write_close();


	function msg($msg){
		$container = imagecreate(250, 170); // set size of image
		$black = imagecolorallocate($container, 0, 0, 0); // set RGB for color black
		$white = imagecolorallocate($container, 255, 255, 255); // set RGB for color white
		$font = '/Library/Fonts/Arial.ttf'; // grab the font from my hard drive
		imagefilledrectangle($container, 0, 0, 250, 170, $black); // create rectangle graphic

		$px = (imagesx($container) / (strlen($msg)/1.15)); // x axis position
		$py = (imagesy($container) / 3.5); // y axis position

		//Write text to the image using fonts using FreeType 2
		imagefttext($container, 28, -27, $px, $py, $white, $font, $msg);
		header("Content-type: image/png"); // Change header type
		imagepng($container, null); // Output a PNG image to either the browser or a file
		imagedestroy($container); // Frees any memory associated with image
	}

	msg($file[$random]); // Invoke msg function & display random selection to user
?>