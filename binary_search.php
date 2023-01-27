<?php

function binary_search($arr, $target) {
    $left = 0;
    $right = count($arr) - 1;
  
    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);
        if ($arr[$mid] == $target) {
            return $arr[$mid] . ' is at index ' . $mid;
        } else if ($arr[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }
    return $target . ' is not found';
}

$arr = array(1, 5, 13, 24, 25);

$target = 5;

echo binary_search($arr, $target);
?>