<?php
if(isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])){
    // use htmlentities for securities reasons
    $day=htmlentities($_GET['day']);
    $date=htmlentities($_GET['date']);
    $year=htmlentities($_GET['year']);
   if(!empty($day) && !empty($date) && !empty($year)){
       echo "It is ".$day."  ". $date." ".$year;
   } else {
       echo "<h1>fill in all fields </h1>";
   }


}

?>

<form action="GET_METHOD.php" method="get" >
<fieldset>
<legend>Day Date Year</legend>
    <h2>Day<br><input type="text" name="day"></h2>
    <h2>Date<br><input type="text" name="date"></h2>
    <h2>Year<br><input type="text" name="year"></h2>
    <h1><input type="submit" value="Submit"></h1>

</fieldset>
</form>
