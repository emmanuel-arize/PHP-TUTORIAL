<?php
require "CONNECTING.inc.php";
$conn=$conn;
$query="SELECT id,food, calories FROM food ORDER BY id";
/**PHP makes it easy to get data from your results and loop over it using a while statement. When it fails to get the
next row, it returns false, and your loop ends. These examples work with
mysqli_fetch_assoc - Associative array with column names as keys
mysqli_fetch_object - stdClass object with column names as variables
mysqli_fetch_array - Associative AND Numeric array (can use arguments to get one or the other)
mysqli_fetch_row - Numeric array
 */
/** The while() loop loops through the result set and outputs the data from the id, firstname and lastname columns */
$result=mysqli_query($conn,$query);
// mysqli_num_rows - Get the number of rows in a result
if (mysqli_num_rows($result) > 0) {
    // mysqli_fetch_assoc - Fetch a result row as an associative array
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - food: " . $row["food"]. " " . $row["calories"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>