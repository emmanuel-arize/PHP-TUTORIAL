<?php
$servername="localhost";
$username="root";
$password='';
$dbname="ARIZEDATABASE";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("the was error connecting to arizedatabase". mysqli_connect_error());
}

if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['marks'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$mark=$_POST['marks'];

//$firstname=filter_var($firstname,FILTER_SANITIZE_STRING);
//$lastname=filter_var($lastname, FILTER_SANITIZE_STRING);
//$email=filter_var($email, FILTER_SANITIZE_EMAIL);
//$mark=filter_var($mark,FILTER_SANITIZE_NUMBER_FLOAT);

if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['marks'])){
    $query="INSERT INTO Students (firstname,lastname,email,marks) VALUES ('$firstname','$lastname','$email',$mark)";
    if(mysqli_query($conn,$query)){
        echo "  User added";
    } else {echo "Error  ".mysqli_error($conn);  }

    }
}


?>

<form action='user_input.php' method='post' autocomplete="on">
<h2>First name<br><input type='text' name='firstname'></h2>
<h2>Last name<br><input type='text' name='lastname'></h2>
<h2>Email<br><input type='email' name='email'></h2>
<h2>mark<br><input type='number' name='marks'></h2>
<h2><input type='submit' value='Submit'></h2>
</form>