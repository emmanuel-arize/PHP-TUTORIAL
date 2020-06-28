<?php
// inequality and not identical operators
$x='12';
$y=12;
// inequality
echo "<br>";
if($x !=$y) {
  echo " $x and $y are not equal";
}
else {
    echo " $x and $y are equal";
};
echo "<br>";
//not identical  operators
if($x !==$y) {
  echo " $x and $y are not identical <br>";
}
else {
    echo " $x and $y are identical <br>";
};

//logical operators
if($x && $y==12) {
  echo " $x and $y are the same <br>";
}
else {
    echo " $x and $y are not the same <br>";
};

if($x AND $y==12) {
  echo " $x and $y are the same using logical operator and <br>";
}
else {
    echo " $x and $y are not the same using and logical operator ";
};


if($x || $y==12) {
  echo " either $x and $y is equal to 12 or both when using or logical operator <br>";
}
else {
    echo " both $x and $y are false <br>";
};

if($x or $y==12) {
  echo " either $x and $y is equal to 12 or both when using or logical operator <br>";
}
else {
    echo " both $x and $y are false <br>";
};


 ?>
