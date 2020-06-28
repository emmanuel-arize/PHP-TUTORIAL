<?php
//In order to filter out values from an array and obtain a new array containing all the values that satisfy the filter
//condition, you can use the array_filter function.
/*
//echo $filtered_array;*/
$my_array=[1,2,'',4,null,[],34];
$f_array= array_filter($my_array);
echo $f_array;
//Removing terminal elements
//array_shift() - Shift an element off the beginning of array.
$my_fruits=array('bananas','mango','apples');
print_r(array_shift($my_fruits));
echo "<br>".$my_fruits[1]."<br>";
print_r($my_fruits);

?>
