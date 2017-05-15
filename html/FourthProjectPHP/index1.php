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
        $xpath = new DOMXPath(DOMDocument :: loadHTMLFile($url));
        $nodes = $xpath->query("//div[@class='title']");
        $nodes1 = $xpath->query("//strong[@class='final-price']");
        $data = "";      
        for ($i = 0; $i < $nodes1->length; $i++) {
            $data .= 'Товар: ' . $nodes[$i+1]->nodeValue . ' Цена: ' . $nodes1[$i]->nodeValue . " \n ";
        }
        echo $data;
        file_put_contents('data1.txt', $data);  
        ?>
    </body>
</html>
