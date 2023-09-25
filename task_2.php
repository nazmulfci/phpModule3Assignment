<?php

$numbers = array(1, 2, 3, 4, 5, 6,7,8,9,10);
function removeEvenNumbers(&$arr) {
    $arr = array_filter($arr, function($value) {
        return $value % 2 != 0; 
    });
}
 
removeEvenNumbers($numbers);
 
print_r($numbers);