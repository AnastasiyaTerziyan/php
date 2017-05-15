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
        <?php include_once 'yaml.php'; ?>
    </head>
    <body>
        <div>
        <?php
            foreach (parseYaml("form.yaml") as $form){
                echo $form . "<br/>";
            }
        ?>
        </div>
    </body>
</html>
