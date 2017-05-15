<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="2row.php" method="post">
            <p>Введите число, до которого будет выводиться ряд: 
                <input type="text" name="number" /></p>
            <p><input type="submit" value="Отправить"/></p>
        </form>  
        <?php
        $number = htmlspecialchars($_POST['number']);
        echo '<div class="summ">';
        $power = 2;
        $j = 1;
        $accuracy = $number;
        $i = 0;
        $summ = 0;
        $sign = "";
        while ($j/2 <= $accuracy) {
            echo '<span class="number">';
            echo '<span class="fraction">1/' . ($j) . '&sup' . ($power) . '</span></span>';
            echo '<span class="sign">';

            if ($i % 2 == 0) {
                $sign = "-";
                $summ += 1 / (pow($j, $power));
            } else {
                $sign = "+";
                $summ -= 1 / (pow($j, $power));
            }
            if ($i == $accuracy-1) {
                $sign = "=";
            }
            echo ($sign) . '</span>';

            $j += 2;
            $i++;
        }
        if ($summ != 0){
        echo '<span class="result">' . ($summ) . '</span>';
        }
        echo '</div>';
        ?>
    </body>
</html>

