<?php
// get to the php folder then open the php.ini file
// find [browscap]
//; http://php.net/browscap
// spacify the path to the browscap
//browscap="C:\xampp\php\extras\browscap.ini"
//browscap="C:\xampp\php\php_browscap.ini


//get_browser() attempts to determine the capabilities of the user's browser. 
//This is done by looking up the browser's inform-ation in the browscap.ini file. 
//By default, the value of HTTP_USER_AGENT is used;

// $agent=$_SERVER['HTTP_USER_AGNET'] can be used instead of null
// true if we want the value to  return as an array
$browser=get_browser(null,true);
print_r($browser['version']);
?>