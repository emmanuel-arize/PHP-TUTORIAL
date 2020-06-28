<?php
/* PHP has three types of arrays:
Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays*/

//An array is a special variable, which can hold more than one value at a time.
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";
// printing out all the array
print_r($cars);
echo "<br>";
$cars[3]='Opel';
//The count() function is used to return the length
// (the number of elements) of an array:
$length_of_array=count($cars);
echo "the length of the array is ".$length_of_array;
echo "<br>";
echo "the length of the array is $length_of_array";
echo "<br>";
print_r($cars);
echo "<br>";


$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo "elements of the car arrays are ".$cars[$x];
    echo "<br>";
};

foreach($cars as $car){
    echo "the cars are :".$car."<br>";
}

//aassoiative array
$cars2 = array("Volvo"=>21, "BMW"=>23, "Toyota"=>67,"Opel"=>45);
print_r($cars2);
echo "<br>";
echo $cars2['Volvo'];
echo "<br>";


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach ($age as $x=>$x_value){
    echo 'Key  '.$x . '  Value '.$x_value;
    echo "<br>";
}

$cars3 = array("Volvo"=>21, "BMW"=>23, "Toyota"=>67,"Opel"=>45);
/**foreach ($array as $value) {
    code to be executed;
} */
foreach ($cars3 as $cars=>$car_value){
    echo "car  == ".$cars."  price ==".$car_value;
    echo "<br>";
}



 ?>
