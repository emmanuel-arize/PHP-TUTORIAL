<?php
/*

PHP supports the following data types:
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
 */
 //array
 $myarray=array('good','bad');
 var_dump($myarray);
 echo "<br>";
 echo $myarray[1];
echo "<br>";
 //ternary conditional operator
echo  23>4 ? '23 is greaer than 4' : '23 is less than' ;


function square($a){
  return $a **2;
};
echo "<br>";
$d=2;
$c=++$d ;// preincreament so c will be 3
echo "<br>";
echo $c;
echo "<br>";
echo square(3);

echo "<br>";
$s = 2;
echo $s; // Prints 2
echo "<br>";
// Pre-increment operator increments $s by one, then returns $i
echo ++$s; // Prints 3 and sotre s as 3
echo "<br>";
// Pre-decrement operator decrements $s by one, then returns $s which will be 2
echo --$s; // Prints 2
echo "<br>";
// Post-increment operator returns $s, then increments $s by one
echo "<br>";
echo $s++; // Prints 2 (but $s value will now be stored as 3)
echo "<br>";
// Post-decrement operator returns $s, then decrements $i by one
echo $s--; // Prints 3 (but $i value is now 2)
echo "<br>";
echo "The current line number of the file is : " . __LINE__ ;
echo "<br>";
echo " and is contained in file : " . __FILE__." and has directory : ".__DIR__;
echo "<br>";
// url of the current page
$came_from = $_SERVER['HTTP_REFERER'];
echo $came_from;
echo "<br>";
$urlpage=htmlentities($_SERVER['HTTP_REFERER']);
echo $urlpage."<br>";

 ?>
