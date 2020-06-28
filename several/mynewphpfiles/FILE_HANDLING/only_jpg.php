<?php
// UPLOADING FILES
//$_FILES takes two argumet the name is mandatory
$name= $_FILES["fileupload"]["name"];
$size=$_FILES['fileupload']['size'];
$max_size=2099100;
$type=$_FILES['fileupload']['type'];
//temporary name
$tmp_name=$_FILES["fileupload"]["tmp_name"];
//$extension = strtolower(substr($name,strpos($name,".") +));
$FileType = pathinfo($name,PATHINFO_EXTENSION);
/*echo "the file has name: ".$name." and size ".$size." type ".$type." temporary name ". $tmp_name;*/
if(isset($name)){
    if(!empty($name)){
      //  if ($extension=="jpg" || $extension=="jpeg" && $type=="image/jpeg" && $size< $max_size) {
if ($FileType=="jpg" || $FileType=="jpeg" && $type=="image/jpeg" && $size< $max_size) {
            //location to stored the uploaded files
            $location='upload/';
            // moving the file from the temporary location to the specified location
            //move_uploaded_file - Moves an uploaded file to a new location
            //move_uploaded_file (string filename, string destination)
            //name will grab the name of the file itself
            if (move_uploaded_file($tmp_name, $location.$name)) {
                echo "<h1>Uploaded</h1>";
            } else {echo "there was an error";}
        }else{
            echo "<h1>Please upload a file a jpg/jpeg and image must be 2mb or less </h1>";}
    }
}

?>
<form action='only_jpg.php' method='POST' enctype='multipart/form-data'>
<input type="file" name="fileupload"><br><br>
<input type="submit" value="Submit">
</form>