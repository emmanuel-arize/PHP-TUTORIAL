<?php
// UPLOADING FILES
//$_FILES takes two argumet the name is mandatory
$name= $_FILES["fileupload"]["name"];
//$size=$_FILES['fileupload']['size'];
//$type=$_FILES['fileupload']['type'];
//temporary name
$tmp_name=$_FILES["fileupload"]["tmp_name"];
/*echo "the file has name: ".$name." and size ".$size." type ".$type." temporary name ". $tmp_name;*/

if(isset($name)){
    if(!empty($name)){
   //location to stored the uploaded files
   $location='upload/';
   // moving the file from the temporary location to the specified location
   //move_uploaded_file - Moves an uploaded file to a new location
   //move_uploaded_file (string filename, string destination)
        //name will grab the name of the file itself
   if(move_uploaded_file($tmp_name,$location.$name)){
       echo "<h1>Uploaded</h1>";
   }

    } else{
        echo "<h1>Please upload a file</h1>";
    }
}

?>

 

<form action='upload2.php' method='POST' enctype='multipart/form-data'>
<input type="file" name="fileupload"><br><br>
<input type="submit" value="Submit">


</form>