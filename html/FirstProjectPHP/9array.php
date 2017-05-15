<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$array = array(0, 1, 2, 3, 4, 5, 4, 5,);
echo 'Массив: ';
foreach ($array as $item) {
    echo "$item ";
}
echo "\n";
$subarray = array(4, 5);
echo 'Подмассив: ';
foreach ($subarray as $item) {
    echo "$item ";
}
echo "\n";
$index = -1;
for ($i = 0; $i < count($array) - count($subarray) + 1; $i++) { //count кол-во эл-тов массива
    $index = $i;
    for ($j = 0; $j < count($subarray); $j++) {
        if ($array[$i + $j] != $subarray[$j]) {
            $index = -1;
            break;
        }
    }
    if ($index >= 0) {
        echo "Подмассив начинается с индекса: $index\n";
    }
}

