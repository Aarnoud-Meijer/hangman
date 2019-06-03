<?php include('bootsrap.php');?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<title>Hangman</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/hangman.js"></script>
</head>
<body>
	<header><h1>Welcome to Hangman</h1>Ghess the word!<br/></header>
	<article>
<?php

//echo $word;
//echo strlen($word)
?>
		<br />

<form method="post" action="">
	<input type="text" value="test" name="test" >
<?php
	// 26 A- Z buttons
	// range(a-z)
	$cssIdrange =  implode (", ", preg_filter('/^/', '#', range('a', 'z')));
	foreach(range('A', 'Z') as $x){
		echo "\t<input type=\"button\" name=\"character\" value=\"".$x."\" />\n";
		
	}
?>
	<input type="button" name="character" value="a" />
	<input type="submit" name="action" value="try again" />
	<input type="submit" name="action" value="Go" />
	<input type="submit" value="Go" />
</form>

	</article>
	<footer></footer>
</body>
</html>
