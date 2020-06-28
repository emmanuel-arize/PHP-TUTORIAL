<?php
$name=$_FILES['uploadfile']['name'];
$size=$_FILES['uploadfile']['size'];
$type=$_FILES['uploadfile']['type'];
$tmp_name=$_FILES['uploadfile']['tmp_name'];

if(isset($name)){
if(!empty($name)){
$location='upload/';
if(move_uploaded_file($tmp_name,$location.$name)){
    echo "<h1>Uploaded</h1>"
}else{
    echo "<h1>There was an error uploading the file</h1>"
}


}

}


?>

<form action='restricting_files.php' method='POST' enctype='multipart/form-data'>
<input type='file' name='uploadfile'><br><br>
<input type='submit' value='Submit'>
</form>