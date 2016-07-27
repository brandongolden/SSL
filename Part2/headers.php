<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		/* output_buffering
		/Applications/MAMP/bin/php/php5.6.2/conf/php.ini */

		//If HTTP Header changes are placed ** below ** HTML...
		//The Value won't change--unless we turn on output buffering.
		header("X-Powered-By: None of your business");
	?>
	<pre>
		<?php
			//Using "headers_list" function
			//with print_r() allow us to see header values
			print_r(headers_list());
		?>
	</pre>
</body>
</html>