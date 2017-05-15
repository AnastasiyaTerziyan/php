<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Итого</title>
    </head>
    <body>
        <div>
           
                <h3>Итого:</h3>
                <p>Вы (<?php echo $data["personType"]; ?>), заказали следующие товары:</p>
                <p><?php echo $data["items"] ?></p>
                <p>Общая стоимость заказа: $<?php echo $data["price"]; ?></p>
                <p>Адрес доставки: <?php echo $data["address"]; ?> </p>
           
        </div>
    </body>
</html>