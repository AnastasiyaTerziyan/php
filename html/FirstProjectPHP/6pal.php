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
        <span>Введите слово или набор чисел, которые хотите проверить (является ли оно палидромом)</span>
        <br><br>
        <form action="6pal.php" method="post">
            Слово для проверки <input type="text" name="testword">
            <input type="submit" name="submit" value="Проверить">
        </form>
        <?php
            if(isset($_POST['testword'])){
                $testword = strtolower( $_POST['testword'] );
                $testword = preg_replace( '/[^\sa-z0-9]/i', '', $testword );
                if($testword == strrev($testword)){
                    echo $testword. ' это палиндром и длина палиндрома равна '.strlen($testword);
                }
                else{
                    echo 'Cлово '.$testword.' это не палиндром';
                }
            }
        ?>
    </body>
</html>
