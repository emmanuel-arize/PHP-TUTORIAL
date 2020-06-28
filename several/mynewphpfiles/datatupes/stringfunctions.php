<?php
if (isset($_GET['user_name']) && !empty($_GET['user_name'])){
    echo  $user_name=$_GET['user_name'];
    $user_name_lower=strtolower($user_name);
     if ($user_name_lower=='emma'){
         echo '  you are the best';
     }
}




?>

<br><br>
<form action="stringfunctions.php" method="GET"]>
    Name <input type="text" name= "user_name"><br><br>
    <input type="submit" value="Submit">


</form>
