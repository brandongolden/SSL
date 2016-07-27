<?php

// Brandon Golden
header("Content-type:text/xml");

$xmlfile = "<?xml version='1.0' encoding='UTF-8'?>";
$xmlfile .= "<feeds>";

$xmlfile .= "<feed>";
$xmlfile .= "<from>Brandon</from>";
$xmlfile .= "<message>Hello World</message>";
$xmlfile .= "</feed>";

$xmlfile .= "<feed>";
$xmlfile .= "<from>James</from>";
$xmlfile .= "<message>Hello World</message>";
$xmlfile .= "</feed>";

$xmlfile .= "</feeds>";

echo $xmlfile;

$dom = new DOMDocument("1.0");
$dom->loadXML($xmlfile);
$dom->save("myxml.xml");

?>