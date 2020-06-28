<?php

// when using rand to generate random numbers you can pass rand() without arguments or
// rand with with two arguments
$max=getrandmax();
$rand=rand();
echo "$rand the max of the random number $max <br>";
//rand(min,max)
echo rand(0,10)." is the random number generated between 0 and 10 <br>";

// getting the maximum of the rand 
echo "<br><br><br><br>";
if(isset($_POST["roll"])){
    //  1 and 6 are inclusive
    $rand=rand(1,6);
    echo "You roll :".$rand."<br>";
}


?>

<form action="randomnumber_generation.php" method='POST'>
<input type="submit" name="roll" value="Roll a Die">

</form>