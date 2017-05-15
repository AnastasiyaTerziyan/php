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
        <form action="1index.php" method="post">
            <p>Введите число, до которого будет выводиться таблица умножения: 
                <input type="text" name="number" /></p>
            <p><input type="submit" value="Отправить"/></p>
        </form>  
        <?php
        $number = htmlspecialchars($_POST['number']);
        $cols = $number;
        $rows = $number;
        $tr = 1;

        echo "<table border='1'>";

        while ($tr <= $rows) {
            echo "<tr>";
            $td = 1;
            while ($td <= $cols) {
                echo "<td>" . $tr * $td . "</td>";
                $td++;
            }
            echo "</tr>";
            $tr++;
        }
        echo "</table>";
        ?>
    </body>
</html>
