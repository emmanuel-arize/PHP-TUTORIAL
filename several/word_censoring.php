<?php
$find=array('alex','billy','dale');
$replace =array('a**x','b***y','d**e');
if(isset($_POST['user_input']) && !empty($_POST['user_input'])){
    $user_input=$_POST['user_input'];
    // convert the input to lowercase
   // $user_input_lower=strtolower($user_input);
    //$user_input_new=str_replace($find,$replace,$user_input_lower);
    //i is case insencetive
    $user_input_new=str_ireplace($find,$replace,$user_input);
    echo "<h1 style='color:red;'>". $user_input_new."</h1>";
    
}






?>
<hr>

<form action='word_censoring.php' method='POST'>
<!--rows gives the height of the box while cols the width-->
<textarea name='user_input' rows='6' cols='30'></textarea><br><br>
<input type='submit'  value="Submit">


</form>