<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


spl_autoload_register(function($className){
    $path = "classes/";
    
    if(file_exists($path.$className.".php")){
    require $path.$className.".php";
    }
            
});


$testUser1 = new User("Настя", "Терзиян", "nastya@mail.ru");
$testUser2 = new User("Вася", "Васин", "вася@вася.ру");

echo 'User1 ';
echo $testUser1 ->getName() . "\n";
echo $testUser1 ->getSurname() . "\n";
echo $testUser1 ->getEmail() . "\n";

echo 'User2 ';
echo $testUser2 ->getName() . "\n";
echo $testUser2 ->getSurname() . "\n";
echo $testUser2 ->getEmail() . "\n";