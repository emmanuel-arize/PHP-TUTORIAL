<?php
require "CONNECTING.inc.php";
$conn=$conn;
$query="SELECT id,food, calories,healthy_unhealthy FROM food WHERE calories>200 AND healthy_unhealthy='u' ";
$result=mysqli_query($conn,$query);

if(mysqli_num_rows($result)!=NULL){
    while($rows=mysqli_fetch_assoc($result)){
        echo "your id is: ".$rows['id']." food: ".$rows['food']." calories: ".$rows['calories']." healthy_unhealthy ".$rows['healthy_unhealthy']."<br>";

    }
}

?>