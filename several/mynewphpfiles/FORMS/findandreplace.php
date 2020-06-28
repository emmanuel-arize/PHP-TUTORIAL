<?php
if (isset($_POST['text']) && isset($_POST['searchfor']) && isset($_POST['replacewith'])){
    $text=$_POST['text'];
   $search=$_POST['searchfor'];
   $replace=$_POST['replacewith'];
/**str_replace - Replace all occurrences of the search string with the replacement string

mixed str_replace (mixed search, mixed replace, mixed subject [, int &count]) */
   if(!empty($text) && !empty($search) && !empty($replace))
   $new_text= str_replace($search,$replace,$text);
   echo $new_text;
}

?>

<form action='findandreplace.php' method='POST'> 
   <textarea name="text" rows="7"  cols="30" ></textarea><br><br>
    Search for <br><br>
    <input type="text" name="searchfor"><br><br>
    Replace with<br><br>
    <input type="text" name="replacewith"><br><br>
    <input type="submit" value="Find and Replace">

</form>