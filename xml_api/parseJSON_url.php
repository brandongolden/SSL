<?php

$contents = file_get_contents("http://localhost:8888/SSL/xml_api/json_encode.php");

$encoded = json_decode($contents);

foreach($encoded->music_catalog as $album){
	echo $album->album."<br />";
}

?>