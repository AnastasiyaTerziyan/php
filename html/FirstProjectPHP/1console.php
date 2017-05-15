<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$number = null;
echo 'Введите число, до которого будет выводиться таблица умножения: ';
fscanf(STDIN, "%d\n", $number); // читает число из STDIN
$cols = $number;
$rows = $number;
$tr = 1;
$mask = "|%3s";
while ($tr <= $rows) {
    echo " ";
    $td = 1;
    while ($td <= $cols) {
        $mul = $tr * $td;
        printf($mask, "$mul");
        $td++;
    }
    echo "|\n";
    $tr++;
}


