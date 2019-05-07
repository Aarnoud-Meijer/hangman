<?php include('bootsrap.php');?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<title>Hangman</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<?php
/*
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/hangman.js"></script>
*/
?>

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
	<input type="text" value="test" name="action" >
	<input type="email" name="email">
	<input type="submit" value="try_again">
	<input type="submit" name="action" value="try again" />
	<input type="submit" name="action" value="Go" />
</form>
<!--<form action="directory" method="post"> 
-->
<form action="index.php" method="POST" enctype="multipart/form-data">
	<p>Please select the file you would like to upload.
	<input type="file" name="upload"> 
	<br>
	<input type="submit" value="Upload File">
</form> 

<!--		<a href="again">try again</a>-->
	</article>
	<footer></footer>
</body>
</html>
