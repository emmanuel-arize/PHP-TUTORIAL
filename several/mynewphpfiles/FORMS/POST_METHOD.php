<?php
if(isset($_POST['username']) && isset($_POST['password1'])){
    $username=$_POST['username'];
    $password=$_POST['password1'];

   if(!empty($username) && !empty($password)){
       echo "It is ".$username."with password as".$password;
   } else {
       echo "<h1>fill in all fields </h1>";
   }


}
?>
<form action="POST_METHOD.php" method="post">
<h1>Username<input type="text" name="username"></h1>
<h1>Password <input type="password" name="password1"></h1>
<h1><input type="submit" value="Submit"></h1>

</form>
