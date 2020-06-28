<?php
// UPLOADING FILES
//$_FILES takes two argumet the name is mandatory
//The original name of the file on the client machine
$name= $_FILES['fileupload']['name'];
//The size, in bytes, of the uploaded file.
$size=$_FILES['fileupload']['size'];
//The mime type of the file, if the browser provided this information
$type=$_FILES['fileupload']['type'];
//$_FILES['userfile']['error'] The error code associated with this file upload. ['error']
//The temporary filename of the file in which the uploaded file was stored on the server
//temporary name
$tmp_name=$_FILES['fileupload']['tmp_name'];
echo "the file has name: ".$name." and size ".$size." type ".$type." temporary name ". $tmp_name;

?>
<form action='upload1.php' method='POST' enctype='multipart/form-data'>
<input type="file" name="fileupload"><br><br>
<input type="submit" value="Submit">
</form>