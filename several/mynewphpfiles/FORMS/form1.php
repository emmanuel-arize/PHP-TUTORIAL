<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {

/*
website and comment are optional using
*/
  if (isset($_POST['name']) && isset($_POST['email']) || isset($_POST['website']) || isset($_POST['comment'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $website=$_POST['website'];
    $comment=$_POST['comment'];

    if (!empty($name) &&  !empty($email) || !empty($website) || !empty($comment)) {
      echo "your are $name with  $email";}

    else {echo "fill the form";}
  }
}

 ?>
 <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Website: <input type="text" name="website"><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>
<input type="submit" value="Submit">
 </form>
