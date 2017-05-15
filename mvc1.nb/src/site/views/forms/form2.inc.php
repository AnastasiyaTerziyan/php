<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Мужчины</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            img{
                width: 230px;
                height: 340px;
                text-align: center;
            }
            .container{
                float: left;
            }
        </style>
    </head>
    <body>
        <form action="/main/form3/" method="post">
            <div class="container">
                <input type="email" name="email" placeholder="Email">
                <input type="text" name="fio" placeholder="ФИО">
                <input type="text" name="address" placeholder="Адрес доставки">
            </div>
            <div class="container">
                <h3>Костюм</h3>
                <img src="http://kapushka.ru/wp-content/uploads/2016/03/42896aab18e3fafe4fac47ef4ef339e6.jpg" alt="image"/>
                <h3>$1000</h3>
                <p>Введите количество товара</p>
                <input type="number" name="item[костюм]" min="1"> 
                <input type="hidden" name="price[костюм]" value="1000">
                <input type="hidden" name="pt" value="Мужчина">
            </div>
            <div class="container">
                <h3>Куртка</h3>
                <img src="http://qpicture.ru/images/2013/11/01/0001wew.jpg" alt="image"/>
                <h3>$500</h3>
                <p>Введите количество товара</p>
                <input type="number" name="item[куртка]" min="1"> 
                <input type="hidden" name="price[куртка]" value="500">
            </div>
            <div class="container">
                <h3>Водолазка</h3>
                <img src="https://lanita.ru/images/offer/5824/7/141567/141567.jpg" alt="image"/>
                <h3>$250</h3>
                <p>Введите количество товара</p>
                <input type="number" name="item[водолазка]" min="1"> 
                <input type="hidden" name="price[водолазка]" value="250">
                <input type="submit" name="submit" value="Отправить">
            </div>
        </form>
    </body>
</html>