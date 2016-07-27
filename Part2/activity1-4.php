<?php
	//Brandon Golden
	$upload_dir = './uploads/';
	$upload_file = $upload_dir . basename($_FILES['file']['name']);
	
	if(move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)){
		echo '<img src="' . $upload_file . '">';
		echo "File is valid, and was successfully uploaded.\n";
	} else {
		echo "Possible file upload attack!\n";
	}

	print_r($_FILES);
?>