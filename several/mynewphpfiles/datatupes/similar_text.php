<?php
// to compare the similarity between text
$string1='my eassy will be about deep learning';
$stringg='my eassy is going to be about deep learning';
similar_text($string1,$stringg,$result);
echo 'the similarity between the two text is '.$result;
echo '<br>';
//length of string
$string_length=strlen($string1);
echo $string_length;
echo '<br>';
//add slashes
$stringh ='this is a link  <img src="imagr.jpg">';
$string_slashes=htmlentities(addslashes($stringh));
echo '<br>';
echo $string_slashes;
echo '<br>';
echo stripslashes($string_slashes);
echo '<br>';

?>