<?php

function Myname(){
    echo "Emmanuel";

}

echo "My name is ";
Myname();
echo "<br>";

// function with arguments
echo "<br>";
function add($number1,$number2){
    echo 'the addition of '.$number1. ' and '. $number2.' is  ' .($number1 + $number2);
}

add(3,4);

?>


<?php
echo "<br>";
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4) . "<br>";
?>


<?php

function add1($num1,$num2){
    $result=$num1 + $num2;
    return $result;
}
echo "<br>";
echo add1(12,12);
echo "<br>";
echo add1(12,12) +200;
echo "<br>";

?>