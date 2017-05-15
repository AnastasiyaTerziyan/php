<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$array = array(8, 3, 5, 9, 4, 6, 7, 0, 1, 2);
$i = 0;

for ($j = 0; $j < count($array) - 1; $j++) {
    $c = TRUE;
    while ($c) {
        $c = FALSE;
        for ($i = 0; $i < count($array) - $j - 1; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                $change = $array[$i + 1];
                $array[$i + 1] = $array[$i];
                $array[$i] = $change;
                $c = TRUE;
            }
        }
    }
}
var_dump($array);
