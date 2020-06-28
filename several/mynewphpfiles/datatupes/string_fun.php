<?php
$string='this is good for the day & and night .';
// 0 print only the number of words
$string_word_count=str_word_count($string,0);
print_r('the numer of words in the sentence is '. $string_word_count);
echo "<br>";
$string_word_count_1=str_word_count($string,1);
// 1 print as array
print_r($string_word_count_1);
echo "<br>";
// 2 for associative array
$string_word_count_2=str_word_count($string,2);
// 1 print as array
print_r($string_word_count_2);

echo "<br>";
$string1='this is good for the day & and night .';
// 2 for associative array 
// & and . will be printed out

$string_word_countt=str_word_count($string1,1,' & .');
print_r( $string_word_countt);
echo "<br>";

$shuffled_string=str_shuffle($string1);
echo $shuffled_string;
echo "<br>";


//echoing substring of the shuffled letters

$sub_string_of_shuffled_string1=substr($shuffled_string,0,8);
echo $sub_string_of_shuffled_string1;
echo "<br>";
// or

$sub_string_of_shuffled_string=substr($shuffled_string,0, strlen($string1)/2);
echo $sub_string_of_shuffled_string;

?>