<?php
//In PHP, a variable starts with the $ sign, followed by the name of the variable
$age =23; // global scope
echo $age;
$x='emma' ;
$y='John';
$income=10;
echo "<br>";
//The PHP var_dump() function returns the data type and value:
echo "<p>i am $y $x </p>" ;
// Global and Local Scope
// A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function
// A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:

function addition($x,$y){
  $z=6;//local scope
  echo $x +$y;
};

addition(3,4);
echo "<br>";

//The global keyword is used to access a global variable from within a function
function add(){
  global $age,$income;
  var_dump("$age and $income");
};

add();
echo "<br>";
var_dump(10);

?>
