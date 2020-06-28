<?php
$to='arize@gmail.com';
$subject=' this is a verification mail';
$body ='';
$headers='From:emmanuel@gmail.com';
//for user friendly which specifies where the mail is coming from use
// we are assuming arizeblog is the site name
//$headers='From:arizeblog <emmanuel@gmail.com>';


if(mail($to,$subject,$body,$headers)){
    echo 'an email has been sent to :'.to;
} else{
    echo 'there was an error sending mail';
}
?>