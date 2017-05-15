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
    </head>
    <body>
        <div>
            <form action="/main/form4" method="post">
                <?php
                if (count($data["notices"])) {
                    echo "Ошибки: ";
                    foreach ($data["notices"] as $key => $value) {
                        echo $value . "<br/>";
                    }
                }
                ?>
                <?php if (!count($data["notices"])) { ?>
                    <h3>Итого:</h3>
                    <p>Вы заказали следующие товары:</p>
                    <?php
                    foreach ($data["data"]["item"] as $key => $value) {
                        if ($value != null || $value != '') {
                            echo $key . ' в количестве: ' . $value . ', ';
                        }
                    }
                    ?>
                    <p>Общая стоимость заказа: $<?php echo $data["price"]; ?></p>
        <!--            <p>Введите адрес доставки<input type="text" name="address"> </p>-->
                    <input type="hidden" name="totalprice" value="<?php echo $data["price"]; ?>;">
                    <input type="hidden" name="pt" value="<?php echo $data["personType"]; ?>">
                    <input type="hidden" name="items" value="
                    <?php
                    foreach ($data["data"]["item"] as $key => $value) {
                        if ($value != null || $value != '') {
                            echo $key . ' в количестве: ' . $value . ', ';
                        }
                    }
                    ?>
                           ">
               <!--            <input type="submit" name="submit" value="Отправить">-->
                <?php } ?>
            </form>
        </div>
    </body>
</html>
