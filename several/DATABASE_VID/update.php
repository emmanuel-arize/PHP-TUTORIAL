<?php
require "CONNECTING.inc.php";
$conn=$conn;

$query="UPDATE  users SET surname='Aka' WHERE username='billy'";

if(mysqli_query($conn,$query)){
    echo "Successfully updated";
} else{
    echo "could not update";
}

?>