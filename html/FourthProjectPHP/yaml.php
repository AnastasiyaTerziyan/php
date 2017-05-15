<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function parseYaml($file) {
    $data = yaml_parse_file($file);
    $forms = array();

    foreach ($data as $line) {
        $form = "<form action=\"" . $line["action"] . "\" method=\"" . $line["method"] . "\">";
        foreach ($line["elements"] as $name => $element) {
            $form .= "<input ";
            foreach ($line["elements"][$name] as $attrname => $attrvalue) {
                $form .= $attrname . "=\"" . $attrvalue . "\" ";
            }
            $form .= "name=\"" . $name . "\"/>";
        }
        $form .= "</form>";
        $forms[] = $form;
    }

    return $forms;
}
