<?php
// bootstrap
// use backend to hide secret word


$words = file('wordlist.10000.txt', FILE_IGNORE_NEW_LINES);

//var_dump($words);
// echo sizeof($words);
// rand ( int $min , int $max ) : int
// echo rand(0, sizeof($words));

echo $words[rand(0, sizeof($words))];

