<?php
//List all files in the current directory and strip out . and ..

//open directory name files
if($handel=opendir("files")){

    // read files within the directory
    while(false!==($file=readdir($handel))){
      if($file!="." && $file!=".."){
          echo $file."<br>";
      }

    }



}
?>