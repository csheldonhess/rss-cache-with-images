<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en">
	<title>Check out this feeeeed!</title>
</head>
<body>

	<?php 
		$myFile = "rss-caching/rss-cache.txt";
		$fh = fopen($myFile, 'r');
		$theData = fread($fh, filesize($myFile));
		fclose($fh);
		echo $theData; 
	?>

</body>
</html> 