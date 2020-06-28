<?php
$servername="localhost";
$username="root";
$password='';
$dbname="ARIZEDATABASE";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("the was error connecting to arizedatabase". mysqli_connect_error());
}
$new_table="CREATE TABLE Students (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(60) NOT NULL,
    lastname VARCHAR(60) NOT NULL,
    email VARCHAR(60),
    marks FLOAT(2,2) )";
if(mysqli_query($conn,$new_table)){

    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);

?>