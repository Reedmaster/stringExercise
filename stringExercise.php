<?php

$string = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>";

//number of words in string
echo "There are [". str_word_count($string). "] words in this string". "<br>";

//number of characters in string
echo "There are [". mb_strlen($string). "] characters in this string". "<br>";

//number of sentences
function countSentences($string) {
    return preg_match_all('/[^\s](\.|\!|\?)(?!\w)/',$string,$match);
}

echo "There are [". countSentences($string). "] sentences in this string". "<br>";

//number of paragraphs
function countParagraph($string) {
    return preg_match_all('/<p>.*?<\/p>/m',$string,$match);
}

echo "There are [". countParagraph($string). "] paragraphs in this string". "<br>";

//longest word
$words = explode(" ", $string);

$longestWordLength = 0;
$longestWord = "";

foreach ($words as $word) {
    if (strlen($word) > $longestWordLength) {
        $longestWordLength = strlen($word);
        $longestWord = $word;
    }
}

echo "The longest word is [". $longestWord. "]". "<br>";

//average sentence length


?>