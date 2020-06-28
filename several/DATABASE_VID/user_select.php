<?php
require "CONNECTING.inc.php";
?>

<form action='select4.php' method='GET'>
chose your food type :<br>
<select name='hu'>
<option value='u'>Unhealthy</option>
<option value='h'>Healthy</option><br><br>
</select><br><br><br><br>
<input type='submit' value='Submit'>
</form>

<?php
if (isset($_GET['hu']) && !empty($_GET['hu'])) {
  $hu=strtolower($_GET['hu']);
 if ($hu=='u' || $hu=='h') {
     $conn=$conn;
     $query="SELECT id,food, calories,healthy_unhealthy FROM food WHERE healthy_unhealthy='$hu' ";
     $result=mysqli_query($conn, $query);

     if (mysqli_num_rows($result)!=null) {
         while ($rows=mysqli_fetch_assoc($result)) {
             echo "your id is: ".$rows['id']." food: ".$rows['food']." calories: ".$rows['calories']." healthy_unhealthy ".$rows['healthy_unhealthy']."<br>";
         }
     }
 }//end of $hu==u or h
}//end of isset
?>