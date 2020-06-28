<?php
require "CONNECTING.inc.php";
$conn=$conn;
$query="SELECT id,food, calories,healthy_unhealthy FROM food WHERE healthy_unhealthy='h' ";
$result=mysqli_query($conn,$query);
// mysqli_num_rows - Get the number of rows in a result
if(mysqli_num_rows($result)!=NULL){
    // mysqli_fetch_assoc - Fetch a result row as an associative array
    while($rows=mysqli_fetch_assoc($result)){
        echo "your id is: ".$rows['id']." food: ".$rows['food']." calories: ".$rows['calories']." healthy_unhealthy ".$rows['healthy_unhealthy']."<br>";

    }
}

?>