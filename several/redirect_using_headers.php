<?php
// the page which we will be redirecting to
$redirect_page='http://google.co.uk';
$redirect=false;

/**php check page 1085
 
/* Redirect browser */ /* Make sure that code below does 
    not get executed when we redirect. */

// this must redirect us to google.co.uk if  $redirect is true

if($redirect==true){
    header("location:".$redirect_page) ;
}

// or
// header("location: http:/google.co.uk")
?>