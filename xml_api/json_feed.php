<?php

// Brandon Golden
header("Content-type:application/json");

$jsonfile = '{';
$jsonfile .= '"smartphones":[';
$jsonfile .= '{"name":"Samsung Galaxy Note5","color":"Black"},';
$jsonfile .= '{"name":"Samsung Galaxy S7","color":"Black"},';
$jsonfile .= ']';
$jsonfile .= '}';

echo $jsonfile;

?>