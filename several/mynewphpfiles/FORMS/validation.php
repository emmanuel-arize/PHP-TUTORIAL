<?php
$namerr=$emailerr='';
if ($_SERVER['REQUEST_METHOD']=='POST') {
  if (empty($_POST['name'])) {
    $namerr= "Name is a required field";
  }else {
    $name=$_POST['name'];
    echo "You are $name  ";
  }

  if (empty($_POST['email'])) {
    $emailerr= "Email is a required field";
  }else {
    $email=$_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo("$email is a valid email address <br>");
    } else {
        echo("$email is not a valid email address <br>");
    }
  }
    /*
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
      echo "this is not a mail format";
      // code...
    }
    echo " with $email";}
*/

      if (empty($_POST['veget'])) {
        $namerr= "This is a required field";
      }else {
        $veg=$_POST['veget'];
        echo "You have selected $veg  ";
      }
}
 ?>

 <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="on">
   <h1>Name:</h1><br>
      <span style="color: #FF0000;">*<?php echo $namerr; ?></span><br>
   <input type="text" name="name" placeholder="enter your name" autofocus>
  <br>
  <h1> Email:</h1><br>
   <span style="color: #FF0000;">*<?php echo $emailerr; ?></span><br>
   <input type="email" name="email" placeholder="enter a valid email " >
  <br>

<br>
  <h1> Vegetables</h1>
<select name="veget" size="1">
<option value="Peas">Peas</option>
<option value="Beans">Beans</option>
<option value="Carrots">Carrots</option>
</select>
<br>
 <input style="background-color:green" type="submit" value="Submit" size="2">
 </form>
