<?php
require "conf.inc.php";

foreach($ip_block as $ip){
 // if ip_address= the current ip address kill it or block it
     if($ip==$ip_address){
        die('<h1>Your ip address </h1>'.$ip_address.' <h1>has been block</h1>');
    }
   // echo $ip;
}

?>

<h1>Welcome!</h1>