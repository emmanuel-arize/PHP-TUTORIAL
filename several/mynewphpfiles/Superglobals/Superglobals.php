<?php
/*
The PHP superglobal variables are:
$GLOBALS $_SERVER $_REQUEST $_POST $_GET $_FILES $_ENV $_COOKIE $_SESSION
*/
$x = 75;
$y = 25;

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
  echo "<br>";

//$_SERVER is a PHP super global variable which holds information about
// headers, paths, and script locations.
//Returns the filename of the currently executing script
echo $_SERVER['PHP_SELF'];
echo "<br>";
//Returns the version of the Common Gateway Interface (CGI) the server is using
echo "Common Gateway Interface (CGI) the server is using <br>";
echo $_SERVER['GATEWAY_INTERFACE'];
echo "<br>";
//Returns the IP address of the host server
$_SERVER['SERVER_ADDR'];
echo "<br>";
//Returns the name of the host server (such as www.w3schools.com)
echo $_SERVER['SERVER_NAME'];


//Returns the server identification string (such as Apache/2.2.24)
echo "<br>";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br>";
//$_SERVER['SERVER_PORT']	Returns the port on the server machine being used by the web server for communication (such as 80)
echo $_SERVER['PATH_TRANSLATED'];

 ?>
