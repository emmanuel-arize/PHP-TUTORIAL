<?php 
// to write to a file 
// this will create a new file named name.txt when run
//$handle=fopen('name.txt','w');
//a will append to the file
$handle=fopen('name.txt','a');
//fwrite() is used to write to a file
//The first parameter of fwrite() contains the name of the file to write 
//to and the second parameter is the string to be written.
// writing to the file
// \n for new line
fwrite($handle,"  alex is going \n ");
fwrite($handle,"emma is going \n");
fclose($handle);
?>