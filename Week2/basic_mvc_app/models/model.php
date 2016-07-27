<?php

class Views {
	function getView($filename="", $arrayInput=array()) {
		include $filename;
	}
}

?>