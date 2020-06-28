<?php

//ascending numerical order:
$arrayName = array(2,1,3,5,4);
//To apply a function to every item in an array, use array_map()

$newar=array_map('add',$arrayName);
foreach ($arrayName as $value) {
  echo $value;
  echo "<br>";
  // code...
}
function add($numbers){
  return $numbers + 2;}
echo "<br>";
echo "adding two to the numbers";
echo "<br>";
print_r ($newar);
 ?>
