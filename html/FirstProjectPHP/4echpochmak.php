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
        <style>
            p {
                margin:5px; text-align:center;
            }
            b {
                margin:0 5px;
            }
        </style>
    </head>
    <body>
        <form action="4echpochmak.php" method="post">
            <p>Введите число, до которого будет выводиться эчпочмак Паскаля :D : 
                <input type="text" name="number1" /></p>
            <p><input type="submit" value="Отправить"/></p>
        </form> 
        <?php
        $number1 = htmlspecialchars($_POST['number1']);
        $rows = $number1;
        $triangle = '';
        $numbers = array(0 => array(0));
        for ($row = 1; $row <= $rows; $row++) {
            $numbers[$row] = array();
            $triangle .= '<p>';
            for ($column = 1; $column <= $row; $column++) {
                $number = ($column == 1 || $column == $row ? 1 : ($numbers[$row - 1][$column - 1] + $numbers[$row - 1][$column]));
                $numbers[$row][$column] = $number;
                $triangle .= '<b>' . $number . '</b>';
            }
            $triangle .= '</p>';
        }
        echo $triangle;
        ?>
    </body>
</html>
