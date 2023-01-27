<?php

function bubble_sort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

$arr = array(25, 55, 33, 21, 7);

$sortArr = array();

$sortArr = bubble_sort($arr);

for($i=0; $i<count($sortArr); $i++) {

    echo $sortArr[$i].' ';
}

?>