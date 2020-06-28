<?php
//Within the scope of a function or class method, the global keyword may be used to create an access user-defined
//global variables.
$user_ip=$_SERVER['REMOTE_ADDR'];

function echo_ip(){
  global $user_ip;
  $user= "Your IP ADRESS is $user_ip";
  echo $user;
}

echo_ip();

?>