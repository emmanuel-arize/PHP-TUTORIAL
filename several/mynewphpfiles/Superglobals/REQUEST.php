<?php
/*$_SERVER is a PHP super global variable which holds information about
headers, paths, and script locations.

$_SERVER['REQUEST_METHOD']	Returns the request method used to access the
page (such as POST)

$_REQUEST is used to collect data after submitting an HTML form.
*/
if($_SERVER['REQUEST_METHOD']=='POST'){
  if (empty($_POST['yourname'])) {
    echo "You did not provide your name";
    // code...
  }
  else {
    echo "<h1>".$_POST['yourname']."<h1>";
  }
}

//$_SERVER['PHP_SELF']	Returns the filename of the currently executing script
 ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
   Name:
   <input type="text" name="yourname"/>
   <input type="submit" value="Submit">
</form>
