<?php
$filename='filetorename.txt';
// generating random numbers
$rand=rand(10000,99999);
//rename(oldfile,newfile)
if(rename($filename,$rand.'.txt')){
    echo "File <strong> $filename</strong> has been rename to <strong>$rand.txt</strong>";
} else{
    echo "could not rename the file";
}
?>