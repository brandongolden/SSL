<?php

$xmlStr = file_get_contents("http://localhost:8888/SSL/xml_api/xml_feed.php");

$xml = new SimpleXMLElement($xmlStr);

foreach ($xml->feed as $feeds) {
	echo $feeds->from . ' says...' . $feeds->message . '<br />';
}

?>

<pre>
<?php

var_dump($xml);

?>
</pre>