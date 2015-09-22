<?php

$words = Array(
    'cats',
    'butts',
    'blah',
    'foobar',
    'lala',
    'dada',
);
for($i=0; $i < $_POST[numberOfWords]; $i++) {
    $wordToAdd = $wordToAdd.' '.array_rand($words);
}
    if ($_POST[isSymbol]) {
        $symbol = '%';
    }
    if ($_POST[isNumber]) {
        $number = '1';

}
    $randomWord = $wordToAdd.$symbol.$number;

