<?php
$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array);
$comma_separatedd = implode("--", $array);
print $comma_separated; // lastname,email,phone
echo "<br>";
print $comma_separatedd; // lastname--email--phone
?>