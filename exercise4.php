<?php
    function box($width, $height, $depth){
        $area = $width * $height;
        $volume = $width * $height * $depth;
        return array('area' => $area, 'volume' => $volume);
    }
    $width = 7;
    $height = 2;
    $depth = 5;
    
    $result = box($width, $height, $depth);
    
    echo "The area of the box is: " . $result['area'] . "<br>";
    echo "The volume of the box is: " . $result['volume'];
?>
