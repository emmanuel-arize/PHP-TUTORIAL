<?php
/*printf will output a formatted string using placeholders
sprintf will return the formatted string
*/
$name='emama';
$greet=sprintf("hi %s how is your day",$name);
echo $greet;
echo "<br>";
$money = 25.2;
printf("%01.3f",$money);// 25.200



?>