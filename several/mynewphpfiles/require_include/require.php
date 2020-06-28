<?php
/*
require() and include() are identical in every way except
 how they handle failure. include() produces a Warning while require()
 results in a Fatal Error. In other words, don't hesitate to use require()
 if you want a missing file to halt processing of
the page. include() does not behave this way, the script will continue
 regardless.
*/
require 'require.ini.php';
echo '<h2>'. $var1.'</h2>';
echo "<h1>".$var2."<h1>";


?>
