<?php

header("Content-type:application/json");

/*
$jsonfile = '{';
$jsonfile .= '"music_catalog":[';
$jsonfile .= '{"artist":"MJ","album":"Leave Me Along"},';
$jsonfile .= '{"artist":"MJ","album":"Just Beat It!"},';
$jsonfile .= ']';
$jsonfile .= '}';
*/

$jsonfile = array("music_catalog"=>array(array("artist"=>"MJ", "album"=>"Leave Me Along"), array("artist"=>"MJ", "album"=>"Just Beat It!")));

// echo $jsonfile;

echo json_encode($jsonfile);

?>