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
include('bootsrap.php');
echo $word;
echo strlen($word)
?>
		<br />

		<a href="again">try again</a>
	</article>
	<footer></footer>
</body>
</html>
