<?php 
    function grade($math, $physics, $english){
        $sum = $math + $physics + $english;
        $average = $sum / 3; 
        return $average;
    }

    $return_value = grade(5, 3, 5);
    echo "Returned value from the function: $return_value";


?>