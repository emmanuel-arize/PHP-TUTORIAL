<?php
if(isset($_POST['user_password']) && !empty($_POST['user_password'])){ 
    // hashing the password
    // md5 is one way encrption
        $user_password=md5($_POST['user_password']);
        
        //echo $user_password;
    // echo "<h1>Your Password is : $user_password </h1><br><br>";
    $filename='hash.txt';
    $handle=fopen($filename,'r');
    $file_password=fread($handle,filesize($filename));
    if($user_password==$file_password){
        echo "Your password is correct";
    } else{
        echo "You\t've entered a wrong password";
    }

    } else{
        echo "Enter your password";
    }



?>
<form action='md5hashing1.php' method='POST'>
<p>Password<br><input type='text' name='user_password'></p><br><br>
<input type='submit' value='Submit'>
</form>