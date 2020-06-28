<?php
// directory name which is files
$directory='files';
//opendir - open directory 
if($handle=opendir($directory."/")){
    //echo "looking inside \'$directory\'direcotry";
    echo 'looking inside \''.$directory.'\' direcotry<br>';


    while(false!==($file=readdir($handle))){
        // removing the . and .. that appear  in the browser
        if($file!='.' && $file!='..'){
            // echo $file."<br>";
            // adding  a link tom the file
            echo '<a href="'.$directory.'/'.$file.'">'.$file.'</a><br>';
           
        }
}
}


?>