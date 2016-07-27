<?php

$contents = file_get_contents("myjson.json");

$encoded = json_decode($contents);

foreach($encoded->music_catalog as $album){
	echo $album->album."<br />";
}

?>