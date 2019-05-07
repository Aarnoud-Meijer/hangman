<?php
// bootstrap
// use backend to hide secret word


$words = file('wordlist.10000.txt', FILE_IGNORE_NEW_LINES);

// get random word
$word = $words[rand(0, sizeof($words))];

// use session to store word and ghessed char
// store failed attemts

session_start();


