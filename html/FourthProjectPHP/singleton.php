<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class singleton {
    protected static $instance;
    private static $name;

    public function getName(){
        return self::$name;
    }


    private function __construct() {  
        self::$name = rand(0,100);
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self; //в этой переменной синглтон хранит сам себя  
        }
 
        return self::$instance;
    }
 
    private function __clone() {
    }

    private function __wakeup() {
    }    
}

$el = singleton::getInstance();
$el1 = singleton::getInstance();
$el2 = singleton::getInstance();

echo $el -> getName() . "\n";
echo $el1 -> getName() . "\n";
echo $el2 -> getName() . "\n";
