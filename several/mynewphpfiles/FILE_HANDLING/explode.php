<?php 

//explode and strstr are simpler methods to get substrings by separators.
//A string containing several parts of text that are separated by a common character can be split into parts with the
//explode function.
$fruits = "apple,pear,grapefruit,cherry";
echo '<br>';

print_r(explode(",",$fruits));// ['apple', 'pear', 'grapefruit', 'cherry']
echo '<br>';
?>