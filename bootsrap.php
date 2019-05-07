<?php
// bootstrap
// use backend to hide secret word

session_start();


if($_SERVER["REQUEST_METHOD"] == "POST"){
	var_dump($_POST);
	// var_dump($_SERVER);
}

//var_dump($_GET);

// if get or post
//var_dump($_GET);
// array(1) { ["page"]=> string(5) "again" } 

if ($_GET == ["page"] || $_GET == ["start"]){
	// CLEAR WORD
	$_SESSION['word'] = null;
	//@header("Content-type: text/html; charset=utf-8");
	//header("/index.php");
	//header('Refresh: 1; url=index.php');
	//exit();
}



// use session to store word and ghessed char
// store failed attemts





if(empty($_SESSION['word'])){
	$words = file('wordlist.10000.txt', FILE_IGNORE_NEW_LINES);
	$_SESSION['word'] = $words[rand(0, sizeof($words))];
}
//var_dump($_SESSION);

// get random word
$word = $words[rand(0, sizeof($words))];




