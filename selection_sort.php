<?php

function selection_sort($arr) {
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$minIndex];
        $arr[$minIndex] = $temp;
    }
    return $arr;
}

$arr = array(25, 55, 33, 21, 7);

$sortArr = array();

$sortArr = selection_sort($arr);

for($i=0; $i<count($sortArr); $i++) {

    echo $sortArr[$i].' ';
}

?>