<?php
$food=array('Healthy'=>
                   array('salad','vegetable','pasta'),
            'Unhealthy'=>array('Pizza','ice cream','popcorn')
          );


foreach ($food as $element=>$inner_array){
    echo "<strong>".$element.'</strong><br>';
    foreach ($inner_array as $item){
        echo $item.'<br>';
    }
}

echo "<br>";
print_r($food);

?>