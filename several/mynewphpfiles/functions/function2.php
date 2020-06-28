<?php
/*
Variable functions won't work with language constructs such as echo(), print(),
 unset(), isset(), empty(), include(), require() and the like. You need to use
your own wrapper function to utilize any of these constructs as variable
functions
*/
function add($a,$b){
  // This is a wrapper function around echo
    echo "the addition of $a and $b is  ".($a +$b);
}

$funcName='add';
$funcName(1,2);
$string='abc';
echo "<br>";
var_dump($string);
echo "<br>";
function square_num($a){
  echo " $a times 2 is =  ".($a*2);
};

$numbersquare='square_num';
$numbersquare(4);
echo "<br>";
?>
