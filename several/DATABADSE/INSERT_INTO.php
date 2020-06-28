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
/*
$inserting="INSERT INTO MyGuests (firstname,lastname,email)
VALUES ('John', 'Arma' ,'arr@gmail.com')";

if(mysqli_query($conn,$inserting)){
    echo "data has been inserted into MyGuests successfully";
} else {
    echo "Error creating inserting: " . mysqli_error($conn);
}*/
$mydata="INSERT INTO MyGuests (firstname,lastname,email)
VALUES ('Emma', 'Arthur' ,'arthur@gmail.com')";

if(mysqli_query($conn,$mydata)){
    echo "data has been inserted into MyGuests successfully";
} else {
    echo "Error creating inserting: " . mysqli_error($conn);
}
mysqli_close($conn);
?>