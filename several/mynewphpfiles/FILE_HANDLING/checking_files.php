<?php
// if file has different directory specifies the directory
$filename='file.txt';
//file_exists - Checks whether a file or directory exists
if(file_exists($filename)){
    echo "file already exist";
} else {
    echo "file does not exist";
}
?>