<?php
// w-writting
//r -reading
// a-appending
/*x+ Creates a new file for read/write. Returns FALSE and an error if 
file already exists*/
/**The first parameter of fopen() contains the name of the file to be opened and the 
 * second parameter specifies in which mode the file should be opened. */

$myfile=fopen('text_file.txt','r') or die('file does not exist');
/* 1. The fread() function reads from an open file.
The first parameter of fread() contains the name of the file to read from and the second parameter 
specifies the maximum number of bytes to read.
2.The fgets() function is used to read a single line from a file.
3.The feof() function checks if the "end-of-file" (EOF) has been reached.
4.The fgetc() function is used to read a single character from a file. */
echo fread($myfile, filesize('text_file.txt'));
// reading a single line
//echo fgets($myfile);

//The fclose() requires the name of the file (or a variable that holds the filename)
// we want to close:

//fclose($myfile);




?>