<?php
//$_SERVER['SCRIPT_NAME']	Returns the path of the current script
$script_name=$_SERVER['SCRIPT_NAME'];
/**
 * this will dynamically change the path according to the page will visit
 * <form action="<?php $script_name?>" method="POST"> */
?>
<form action="<?php $script_name?>" method="POST">
<input type="submit" name="submit" value="Submit">

</form>
