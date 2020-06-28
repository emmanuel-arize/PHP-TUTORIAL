<?php
//$_SERVER is an array containing information such as headers, paths, 
//and script locations. T
// this will  print the host in this case localhost
$host = $_SERVER["HTTP_HOST"];
// appending the image url to the host
$images =$host."/images/";

?>
