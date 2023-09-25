<?php
$grades = array(85, 92, 78, 88, 95);

function sort_grade(&$arr) {
    rsort($arr);
}

sort_grade($grades);

print_r($grades);
