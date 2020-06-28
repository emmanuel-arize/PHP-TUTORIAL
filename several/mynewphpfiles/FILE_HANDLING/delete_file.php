<?php
//The unlink function deletes a single file and returns whether the operation was successful.
//On the other hand, directories should be deleted with rmdir. However, this function only deletes empty directories.
//To delete a directory with files, delete the files in the directories first. If the directory contains subdirectories,
//recursion may be needed.
$filename='files/filetodelete.txt';
// add @ to prevent the warning displaying
if(@unlink($filename)){
    echo "<strong>". $filename."</strong> has been deletected ";
}else{
    echo "Cannot delete $filename";
}

?>