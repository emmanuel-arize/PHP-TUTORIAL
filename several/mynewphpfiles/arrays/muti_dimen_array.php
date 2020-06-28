<?php

$cars=array(
    array("Volvo",21, 23,34),
    array("Toyota",67,34,53),
    array("Opel",12,12,45),
    array("Land Rover",17,15,3)
);
// printing  toyota
echo $cars[1][0];
echo '<br>';
// volvo
echo $cars[0][0];
echo '<br>';
echo "<table border=\"1\" style=\"width:50%\">";
echo "<tr><th>Products</th><th>Stock</th><th>Price</th><th>Price2</th></tr>";
echo  "<tr><td>".$cars[0][0]."</td><td>".$cars[0][1]."</td><td>".$cars[0][2]."</td><td>".$cars[0][3]."</td></tr>";
echo "<tr><td>".$cars[1][0]."</td><td>".$cars[1][1]."</td><td>".$cars[1][2]."</td><td>".$cars[1][3]."</td></tr>";
echo "<tr><td>".$cars[2][0]."</td><td>".$cars[2][1]."</td><td>".$cars[2][2]."</td><td>".$cars[2][3]."</td></tr>";
echo "<tr><td>".$cars[3][0]."</td><td>".$cars[3][1]."</td><td>".$cars[3][2]."</td><td>".$cars[3][3]."</td></tr>";
echo "</table>";


for ($row=0;$row<4;$row++){
     echo "<p><b>Row number $row</b></p>";
     echo "<ul>";
     for ($col=0;$col<4;$col++){

         echo "<li>".$cars[$row][$col]."</li>";
     }


    echo "<ul>";
     }
?>