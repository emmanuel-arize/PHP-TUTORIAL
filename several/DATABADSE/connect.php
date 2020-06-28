<?php
//MySQLi Object-Oriented
$servername="localhost";
$username="root";
$password='';
$conn=new mysqli($servername,$username,$password);

// CHECHING CONNECTION
if($conn->connect_error){
    die("there is error connecting".$conn->connect_error);
}else{
    echo "Connected successfully";
}
?>