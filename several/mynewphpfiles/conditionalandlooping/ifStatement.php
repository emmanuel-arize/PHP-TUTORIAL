<?php

/*
if (condition) {
    code to be executed if this condition is true;
} elseif (condition) {
    code to be executed if this condition is true;
} else {
    code to be executed if all conditions are false;
}
*/
$t = date("H");

if ($t < "10") {
    echo "Have a good morning! <br>";
} elseif ($t < "19") {
    echo "Have a good day! <br>";
} else {
    echo "Have a good night! <br>";
};

function addition($x,$y){
  $z=$x + $y;
  if ($z < 20) {
    // code...
    echo "the addition of $x and $y is less than 20 <br>";
  } elseif ($z >= 20 && $z <= 50) {
    echo "the addition of $x and $y is betwwen 20 and 50 <br>";
  } else {
    echo "the addition of $x and $y is greater 50 <br>";
  }
};
  addition(30,10);

 ?>
