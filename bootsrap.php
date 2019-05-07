<?php
// bootstrap
// use backend to hide secret word

// if get or post
var_dump($_GET);
// array(1) { ["page"]=> string(5) "again" } 

//if ($_GET == ["page"] || $_GET == ["start"]){
	
//}

// use session to store word and ghessed char
// store failed attemts

session_start();

// CLEAR WORD
// $_SESSION['word'] = null;

if(empty($_SESSION['word'])){
	$words = file('wordlist.10000.txt', FILE_IGNORE_NEW_LINES);
	$_SESSION['word'] = $words[rand(0, sizeof($words))];
}
var_dump($_SESSION);

// get random word
$word = $words[rand(0, sizeof($words))];




