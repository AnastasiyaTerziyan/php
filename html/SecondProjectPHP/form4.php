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
        <?php include_once 'index.php'; ?>
    </head>
    <body>
        <div>
           
                <h3>Итого:</h3>
                <p>Вы (<?php echo $person_type; ?>), заказали следующие товары:</p>
                <p><?php echo $items; ?></p>
                <p>Общая стоимость заказа: $<?php echo $totalprice1; ?></p>
                <p>Адрес доставки: <?php echo $address; ?> </p>
           
        </div>
    </body>
</html>