<?php
    
    
    
    $arr1 = array(
        "A","B","D","E","G","H","I","R","Q","O","N","K","S",
        "T","U","V","Y"
    );
    $i = array_reverse($arr1);
    $arr2 = array(
        32, 26, 37, 28, 27, 34, 31, 30, 41, 37, 25, 37, 33, 24, 27, 35,
        34, 30, 36, 41, 24, 31, 26, 41, 33, 37, 40, 38, 41, 34, 30, 41,
        40, 30, 24, 41, 39, 31, 31, 29, 28
    );
    
    
    foreach($arr2 as $x){
        $y = $x-24;
        
        if(array_key_exists($y,$i)){
            $var = $i[$y];
            echo $var;
        }else{
            echo " ";
        }
    }
    
?>