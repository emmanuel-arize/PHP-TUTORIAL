<?php
require "CONNECTING.inc.php";
$conn=$conn;
$query="SELECT id,username, firstname FROM users ORDER BY username DESC ";
$result=mysqli_query($conn,$query);
 // mysqli_num_rows - Get the number of rows in a result
if(mysqli_num_rows($result)>0){
    // mysqli_fetch_assoc - Fetch a result row as an associative array
    while($rows=mysqli_fetch_assoc($result)){
        echo "your id is: ".$rows['id']." and with username: ".$rows['username']." and firstname: ".$rows['firstname']."<br>";

    }
}

?>