<?php

// Brandon Golden

$contents = simplexml_load_file("http://localhost:8888/SSL/Week3/fruitxml.php");

foreach($contents->fruit as $f){
	echo $f->fruitname . " " . $f->fruitcolor ."<br />";
}

?>