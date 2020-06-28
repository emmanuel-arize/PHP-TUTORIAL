<?php
ob_start();//ob_start - Turn on output buffering
?>

<h1>My Page</h1>
this is my page
<?php
// the page which we will be redirecting to
//redirect_page can be an internal file such as
// $redirect_page='login.php'; or $redirect_page='findandreplace.php';
$redirect_page='http://google.co.uk';
// if redirect is true this will redirect us to google.co.uk
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

//ob_end_clean() use when redirect is true
// to output html use
ob_end_flush();
?>
