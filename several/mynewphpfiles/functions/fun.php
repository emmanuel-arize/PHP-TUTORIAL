<?php
/*
function functionName() {
    code to be executed;
}
*/
function add($num1,$num2){
    $results=$num1 + $num1;
    return $results;

}


function divide($unm1,$num2){
    $divi=$unm1/$num2;
    return $divi;
}

echo  add(10,10).'<br>';
echo divide(add(10,10),add(5,5));


function foo()
{
function bar()
{
echo "I don't exist until foo() is called.\n";
}
}
/* We can't call bar() yet
since it doesn't exist. */
foo();
/* Now we can call bar(),
foo()'s processesing has
made it accessable. */
echo "<br>";
bar();
?>
