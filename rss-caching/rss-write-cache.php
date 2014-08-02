<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" dir="ltr" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	require_once("rsslib.php");
	
	// USE YOUR OWN URL - This URL is here for diagnostic purposes
	// (we use a WordPress plugin to gather multiple RSS feeds together)
	$url = 'http://www.consortiumlibrary.org/blogs/news/feed';	
	
	if($url != false)
	{
		$thelinks = RSS_Links($url, 4);

		$myFile = "rss-cache.txt";
		$fh = fopen($myFile, 'w') or die("can't open file");
		fwrite($fh, $thelinks);
		fclose($fh);
	}
?>

</body>
</html>
