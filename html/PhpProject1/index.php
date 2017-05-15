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
        <?php
        $url = 'https://tatarstan.shop.megafon.ru/';
        function getSrcAlt( $url )
{
    # Получаем страницу
    $html = file_get_contents( $url );
    
    # Вытаскиваем адреса и alt
    preg_match_all( '#<img\s+src\s*=\s*"?([^"\s]*)"?.*?(alt="?([^"\s]*)"?)?/?\s*>#is', $html, $matches );
    
    # Возвращаем массив alt и src
    return array( 'src' => $matches[1], 'alt' => $matches[3] );
}
        ?>
    </body>
</html>
