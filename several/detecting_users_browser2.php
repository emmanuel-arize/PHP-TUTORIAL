<?php
// $agent=$_SERVER['HTTP_USER_AGNET'] can be used instead of null
// true if we want the value to  return as an array
//$agent=$_SERVER['HTTP_USER_AGENT'];
//$browser=get_browser(null,true);

$browser=get_browser(null,true);
print_r( $browser);
// will give you the browser name
$browser=strtolower($browser['browser']);

// telling the user to use chrome if he is not use chrome
if ($browser!='chrome'){
    echo "<h1>use chrome instead of $browser for bettter view</h1>";
}



echo $_SERVER['HTTP_USER_AGENT'] . "<hr />\n";
$browser = get_browser();
foreach ($browser as $name => $value) {
print "<b>$name</b> $value <br />\n";
}

?>