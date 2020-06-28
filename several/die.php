<?php
//connecting to mysql database
//@ allow to only display the message written in die
//user=root
@mysqli_connect('localhost','roott','') or die("<h1>could not connect to the database</h1>");

echo "connected";
?>