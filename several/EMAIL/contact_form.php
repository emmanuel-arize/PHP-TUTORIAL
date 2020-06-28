<?php
if(isset($_POST['contact_name']) && isset($_POST['contact_mail']) &&
isset($_POST['contact_message'])){
 $contact_name=$_POST['contact_name'];
  $contact_mail=$_POST['contact_mail'];
   $contact_message=$_POST['contact_message'];

    if(!empty($_POST['contact_name']) && !empty($_POST['contact_mail']) &&
    !empty($_POST['contact_message'])){
        //recipient
        $to='arize@gmail.com';
        $subject=' Contact Form';
        $body = $contact_name."\n".$contact_message;
        // sender
         $headers="From: $contact_mail";
         if(@mail($to,$subject,$body,$headers)){
            echo 'Thank you for contacting us we will be in touch soon :'.to;
        } else{
            echo 'there was an error sending mail';
        }
    
    } else {
        echo "all fields are required";
    }
}

?>


<form action='contact_form.php' method='post'>
Name: <br><input type='text' name='contact_name'><br><br>
Email: <br><input type='email' name='contact_mail'><br><br>
Message: <br><textarea name='contact_message' rows='7' cols=30></textarea><br><br>
<input type='submit' value='Send'>


</form>