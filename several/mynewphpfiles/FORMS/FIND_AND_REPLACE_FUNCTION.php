<?php
$offset=0;
if (isset($_POST['text']) && isset($_POST['searchfor']) && isset($_POST['replacewith'])){
   $text=$_POST['text'];
   $search=$_POST['searchfor'];
   $replace=$_POST['replacewith'];
   //search for length of the search word
   $search_length=strlen($search);

  if (!empty($text) && !empty($search) && !empty($replace)){
      /*The strpos() function searches for a specific text within a string.
If a match is found, the function returns the character position of the first
 match. If no match is found, it will return FALSE.
echo strpos('hello there','there');
echo '<br>';*/

      while($strpos=strpos($text,$search,$offset)){
        $offset = $strpos + $search_length;

        $text =substr_replace($text,$replace,$strpos,$search_length);
      }
    echo $text;
  } else{
      echo "Please fill all fields";
  }
}



?>

<form action='FIND_AND_REPLACE_FUNCTION.php' method='POST'>
   <textarea name="text" rows="7"  cols="30" ></textarea><br><br>
    Search for <br><br>
    <input type="text" name="searchfor"><br><br>
    Replace with<br><br>
    <input type="text" name="replacewith"><br><br>
    <input type="submit" value="Find and Replace">

</form>
