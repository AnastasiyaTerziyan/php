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
        <form action="5deliteli.php" method="post">
            <p>Введите число, делители которого хотите найти: 
                <input type="text" name="number" /></p>
            <p><input type="submit" value="Отправить"/></p>
        </form>  
        <?php
       $number = htmlspecialchars($_POST['number']);
       $dividers = [];
       for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                array_push($dividers, $i);
                if (($i != $number / $i) && ($number % ($number / $i) == 0)) {
                    array_push($dividers, $number / $i);
                }
            }
        }
        asort($dividers);
foreach ($dividers as $divider) {
    echo $divider . "\n";
}
?>
    </body>
</html>