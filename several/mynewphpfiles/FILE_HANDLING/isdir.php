<?php

$dir='files';
//is_dir - Tells whether the filename is a directory
// checking if dir is a directory
if (is_dir($dir)){
    // //open directory 
    if($directory=opendir($dir)){
        while(false !== ($files=readdir($directory))){
//filetype($dir . $files).
if($files!="." && $files!=".."){
    //echo "filename : $files <br>";
    echo '<a href="'.$dir.'/'.$files.'">'.$files.'</a><br>';
}
           
        }


    }
    
}
?>