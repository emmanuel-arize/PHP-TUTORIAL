<?php
/*
 *  for (init counter; test counter; increment counter) {
    code to be executed;
}
  */
for ($count=6;$count>=2;$count--){
    echo "the numbers are $count<br>";};

for ($i=0; $i < 4 ; $i++) {
  echo "$i plus 3 is ".($i*3);
  echo "<br>";
}

for ($i=0,$j=0; $i +$j <=10 ; $i++,$j++) {
  echo "$i plus $j = ".($i+$j);
  echo "<br>";
}

echo "for loop combine with if statement <br>";
for ($i=0,$j=0; ; $i++,$j++) {
  if ($i +$j >10) {
    break;
  }
  echo "$i plus $j = ".($i+$j);
  echo "<br>";
}
/*
foreach(array_expression as $value){statement}
foreach(array_expression as $key => $value) {statement}
*/

$cars=array('opel','toyota');
foreach($cars as $car){
    echo "$car <br>";
};
foreach($cars as $key=>$car){
    echo "$key=> $car <br>";
};

foreach($cars as $key=>$car){
    echo "{$key}=> {$car} <br>";
};

$items = array('book','pen','bag','pencil');
echo 'printing out the items <br>';
foreach ($items as $key => $item) {
  if($item=='bag'){
    break;
  }
echo "{$key}=> {$item} <br>";
}


?>
