<?php

/*switch (n) {
    case label1:
        code to be executed if n=label1;
        break;
    case label2:
        code to be executed if n=label2;
        break;
    case label3:
        code to be executed if n=label3;
        break;
    ...
    default:
        code to be executed if n is different from all labels;
} */

$color='green';

switch ($color){
    case 'red':
        echo "your favoriate color is $color <br>";
        break;

    case 'green':
        echo "your favoriate color is $color <br>";
        break;

    case 'blue':
        echo "your favoriate color is $color <br>";
        break;

    default:
        echo "your favoriate color is $color <br>";

}


$status='student';

switch ($status) {
  case 'teacher':
    // code...
    echo "you are a teacher <br>";
    break;

  case 'student':
    echo ' you are a student <br>';
    break;
}


?>
