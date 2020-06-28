<?php
// because this is a session so we do not add include
session_start();
if(isset($_SESSION['username'])){
    $username =$_SESSION['username'];
    echo "<h1>$username have login successfully</h1>";//.$_SESSION['username']."<h1></h1>";
} else{
    echo "<h1>Please Login</h1>";
}


?>