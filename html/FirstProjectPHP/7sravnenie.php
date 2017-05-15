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
        <form action="7sravnenie.php" method="post">
            <p>Введите первую строку: 
                <input type="text" name="str1" /></p>
            <p>Введите вторую строку: 
                <input type="text" name="str2" /></p>
            <p><input type="submit" value="Отправить"/></p>
        </form>  
        <?php
        $str1 = htmlspecialchars($_POST['str1']);
        $str2 = htmlspecialchars($_POST['str2']);
            $len1 = strlen($str1);
            $len2 = strlen($str2);
            if ($len1 < $len2) {
                echo "Строка 1 меньше\n";
            } else if ($len1 > $len2) {
                echo "Строка 2 меньше\n";
            } else if (strcasecmp($str1, $str2) < 0) {

                echo "Строка 1 меньше\n";
            } else if (strcasecmp($str1, $str2) > 0) {

                echo "Строка 2 меньше\n";
            } else {
                echo"Строки одинаковы\n";
            }
        ?>
    </body>
</html>
