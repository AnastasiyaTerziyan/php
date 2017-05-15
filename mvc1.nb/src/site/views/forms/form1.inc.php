<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Женщины</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            img{
                width: 250px;
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
                <h3>Платье</h3>
                <img src="http://www.kartes-moda.polish.ru/slider/KARTES06.jpg" alt="image"/>
                <h3>$100</h3>
                <p>Введите количество товара</p>
                <input type="number" name="item[платье]" min="1"> 
                <input type="hidden" name="price[платье]" value="100">
                <input type="hidden" name="pt" value="Женщина">               
            </div>
            <div class="container">
                <h3>Топ</h3>
                <img src="http://progorodchelny.ru/userfiles/images/image-05-2016/bwq2j7lm86skh0ougxz13ye9pnivt5rfa4cd.jpg" alt="image"/>
                <h3>$200</h3>
                <p>Введите количество товара</p>
                <input type="number" name="item[топ]" min="1"> 
                <input type="hidden" name="price[топ]" value="200">
            </div>
            <div class="container">
                <h3>Юбка</h3>
                <img src="http://m.io.ua/img_aa/medium/1901/65/19016585.jpg" alt="image"/>
                <h3>$300</h3>
                <p>Введите количество товара</p>
                <input type="number" name="item[юбка]" min="1"> 
                <input type="hidden" name="price[юбка]" value="300">
                <input type="submit" name="submit" value="Отправить">
            </div>            
        </form>
    </body>
</html>
