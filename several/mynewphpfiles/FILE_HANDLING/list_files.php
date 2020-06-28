<?php
$directory='files';
//opendir('/path/to/files')
if ($handle = opendir('files')) {
    // handle is the name assign to the directory
echo "Directory has : $handle\n";
echo "Files:\n";
/* This is the correct way to loop over the directory. */
//Note that readdir() will return the . and .. entries. If you
// don't want these, simply strip them out:

while (false !== ($file = readdir($handle))) {
    // echo '<a href="'.$directory.'/'.$file.'">'.$file.'</a><br>';
//echo "$file\n";
}
/* This is the WRONG way to loop over the directory. */
while ($file = readdir($handle)) {
//echo "$file\n";

echo "$file\n";
}
//closedir($handle);
}
?>