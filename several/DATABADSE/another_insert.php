<?php
$servername="localhost";
$username="root";
$password='';
$dbname="ARIZEDATABASE";
// createing a connection to the database
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$inserted="INSERT INTO Students (firstname,lastname,email,marks)
VALUES ('Felix','kk','a@gmail.com',87.70)";

if(mysqli_query($conn,$inserted)){
    echo "successfully insert data into Student table";
}else{
    echo "Error creating inserting: " . mysqli_error($conn);
}
mysqli_close($conn);
?>