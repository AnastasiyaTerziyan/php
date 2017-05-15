<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Адрес доставки</title>
        <?php include_once 'index.php'; ?>
    </head>
    <body>
        <div>
            <form action="index.php" method="post">
                <h3>Итого:</h3>
                <p>Вы (<?php echo $person_type; ?>), заказали следующие товары:</p>
                <?php
                foreach ($data["item"] as $key => $value) {
                    if ($value != null || $value != '') {
                        echo $key . ' в количестве: ' . $value . ', ';
                    }
                }
                ?>
                <p>Общая стоимость заказа: $<?php echo getTotalPrice($data); ?></p>
                <p>Введите адрес доставки<input type="text" name="address"> </p>
                <input type="hidden" name="totalprice" value="<?php echo getTotalPrice($data) ?>;">
                <input type="hidden" name="pt" value="<?php echo $person_type; ?>">
                <input type="hidden" name="forms" value="3">
                <input type="hidden" name="items" value="
                <?php
                foreach ($data["item"] as $key => $value) {
                    if ($value != null || $value != '') {
                        echo $key . ' в количестве: ' . $value . ', ';
                    }
                }
                ?>
                       ">
                <input type="submit" name="submit" value="Отправить">
            </form>
        </div>
    </body>
</html>
