<?php

// Brandon Golden

$contents = file_get_contents("http://localhost:8888/SSL/Week3/fruitjson.php");

$encoded = json_decode($contents);


foreach ($encoded as $fruit) {
	echo $fruit->fruitname . " " . $fruit->fruitcolor . "<br />";
}

?>