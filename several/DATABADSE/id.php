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
VALUES ('John', 'Doe', 'john@example.com',97.70)";

if(mysqli_query($conn,$inserted)){
    $last_id=mysqli_insert_id($conn);
    echo "New record created successfully. Last inserted ID is: ".$last_id;
}else{
    echo "Error creating inserting: " . mysqli_error($conn);
}
mysqli_close($conn);
?>