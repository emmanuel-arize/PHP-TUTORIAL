<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$dbname="d_database";

$conn=@mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$dbname);
//$conn=@mysqli_connect($mysql_host,$mysql_user,$mysql_pass);
//mysqli_select_db($conn,$dbname);
if(!$conn){
    die("connection error: ".mysqli_connect_error());
}

?>