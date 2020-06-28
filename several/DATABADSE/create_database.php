<?php
//MySQLi Object-Oriented
$servername="localhost";
$username="root";
$password='';
// createing a connection to the database
$conn=new mysqli($servername,$username,$password);

// CHECHING CONNECTION
if($conn->connect_error){
    die("there is error connecting".$conn->connect_error);}

    // create a database
    $sql="CREATE DATABASE myBD";
    if($conn->query($sql)==true){
        echo "data base successfully created";
    } else{
        echo "Error creating database: " .$conn->error;
    }
$conn ->close()
?>