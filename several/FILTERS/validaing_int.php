<?php
$int=100;

if(!filter_var($int,FILTER_VALIDATE_INT)===false){
    echo "this is an integer so ok <br>";
} else{
    echo "not good <br>";
}

$ip = "127.0.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip is a valid IP address <br>");
} else {
    echo("$ip is not a valid IP address<br>");
}




//Sanitize and Validate an Email Address

$email = "john.doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address <br>");
} else {
    echo("$email is not a valid email address <br>");
}


//
$url = "http://www.w3schools.com";
$url=filter_var($url,FILTER_SANITIZE_URL);
if(!filter_var($url,FILTER_VALIDATE_URL)===false){
    echo("$url is a valid url address <br>");
} else {
    echo("$url is not a valid url address <br>");
}
?>