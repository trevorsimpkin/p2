<?php
$symbols = Array(
    '!',
    '@',
    '#',
    '$',
    '%',
    '^',
    '&',
    '*'
);
$words = array();
/**
 * This was my code for scraping words from word list and storing in textfile.
 * for($i=1; $i < 15; $i++)
 *{
 *   $html = file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-0'.$i.'-'.'0'.($i+1).'-hundred.html');
 *   $pattern = '~<li>(.*?)</li>~s';
 *   preg_match_all($pattern, $html, $out);
 *   $words = array_merge($words, $out[1]);
 *}
 *$commaDelimited = implode(',', $words);
 *$results = print_r($commaDelimited, true);
 * file_put_contents('words.txt', print_r($commaDelimited, true));*/
$var = file_get_contents('words.txt'); //Take the contents from the file to the variable
$words = explode(',',$var); //Split it by ','
 //Return a random entry from the array.
if ($_POST[numberOfWords]>0) {
    $wordToDisplay = $words[array_rand($words)];
}
for($i=0; $i < ($_POST[numberOfWords]-1); $i++) {
    $randomWord = $words[array_rand($words)];
        $wordToDisplay = $wordToDisplay.'-'.$randomWord;
}
$wordToDisplay = preg_replace('/\s+/','',$wordToDisplay);
if($_POST[isSymbol]) {
    $wordToDisplay = $wordToDisplay.$symbols[array_rand($symbols)];
     }
if($_POST[isNumber]) {
    $wordToDisplay = $wordToDisplay.rand(0,9);
}
if($_POST[isCamelCase]) {
    $wordToDisplay = str_replace('-',' ',$wordToDisplay);
    $wordToDisplay = ucwords($wordToDisplay);
    $wordToDisplay = str_replace(' ','',$wordToDisplay);
}
