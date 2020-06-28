<?php
$servername="localhost";
$username="root";
$password='';
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    die("there is error connecting".mysqli_connect_error());
}

// creating a database
$sql='CREATE DATABASE ARIZEDATABASE';
if(mysqli_query($conn,$sql)){
    echo "data base successfully created";
} else{
    echo "Error creating database: " .mysqli_error($conn);
}
// closing the database
mysqli_close($conn);
?>