<?php
	//Brandon Golden	
	header('Content-Type: image/jpeg');
	$im = imagecreatefromjpeg("photo.jpg");
	$font = "Arial.ttf";
	$message = "Full Sail";
	$color = imagecolorallocate($im, 0, 0, 0);
	imagefttext($im, 12, 0 , 10, 20, $color, $font, $message);
	imagejpeg($im);
	imagedestroy($im);
?>
