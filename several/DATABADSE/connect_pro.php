<?php
//MySQLi Procedural
$servername="localhost";
$username="root";
$password='';
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    die("could not connect". mysqli_connect_error);
}else{
    echo "Connected successfully";
}
?>