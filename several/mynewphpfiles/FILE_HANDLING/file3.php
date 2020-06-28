<?php
if(isset($_POST['name'])){
$name=$_POST['name'];
if(!empty($name)){
    $handle=fopen('name.txt','a');
    fwrite($handle,$name."\n");
    fclose($handle);
    echo "Current names in file ";
    //file - Reads entire file into an array
    $readin=file('name.txt');
    $count=1;
    $readin_count=count($readin);
    foreach($readin as $names){
        // trim removes whitespace
       echo trim($names);
       if ($count<$readin_count){
           echo ", ";
       }
       $count++;
    }
}else{
    echo "Please type a name";
}}
?>

<form action='file3.php' method='POST'>
<p>Name <input type='text' name='name'></p>
<p><input type='submit' value='Submit'></p>

</form>