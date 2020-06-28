<?php
/**Filtering, also sometimes called sanitization, is the process of removing unwanted
characters from user input, and modifying it to make it suitable for a particular use */

/* The filter_var() function filters a single variable with a specified filter. It takes two pieces of data:
The variable you want to check
The type of check to use

Sanitize a String
The following example uses the filter_var() function to remove all HTML tags from a string:*/
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
echo "<h1>Hello World!</h1><br>";
$tt= "<h2>Hi ther</h2>";
$saint=filter_var($tt,FILTER_SANITIZE_STRIPPED);
echo $saint;

/*Filtering, also sometimes called sanitization, is the process of removing unwanted
characters from user input, and modifying it to make it suitable for a particular use*/
?> 