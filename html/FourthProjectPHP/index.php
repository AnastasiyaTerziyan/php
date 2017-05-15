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
        $url = 'http://www.laredoute.ru/pplp/151517/151756/151757/cat-151811.aspx#shoppingtool=treestructureflyout';

        function get_tag($attr, $value, $html, $tag = null) {
            if (is_null($tag))
                $tag = '\w+';
            else
                $tag = preg_quote($tag);

            $attr = preg_quote($attr); //Экранирует символы в регулярных выражениях
            $value = preg_quote($value);

            $tag_regex = "/<(" . $tag . ")[^>]*$attr\s*=\s*" .
                    "(['\"])$value\\2[^>]*>(.*?)<\/\\1>/";

            preg_match_all($tag_regex, $html, $matches, PREG_PATTERN_ORDER);

            return $matches[3];
        }
        $data = "";
        $html = file_get_contents($url);
        $array = get_tag("class", "title", $html, "div");
        $array1 = get_tag("class", "final-price", $html, "strong");
        for ($i = 0; $i < count($array1); $i++) {
            $data .= 'Товар: ' . $array[$i+1] . ' Цена: ' . $array1[$i] . '<br/>';
        }
        echo $data;
        $data = str_replace("<br/>", "\n", $data);
        file_put_contents('data.txt', $data);       
        ?>
    </body>
</html>
