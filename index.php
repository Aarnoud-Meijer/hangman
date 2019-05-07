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

echo $word;
echo strlen($word)
?>
		<br />

<form method="post" action="/">
	<input type="text" value="test"></input>
	<input type="email"></input>
	<input type="submit" value="try_again"/>
</form>

<form action="index.php" method="post" enctype="multipart/form-data">
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
