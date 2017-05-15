<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author root
 */
class User {

    private static $name;
    private static $surname;
    private static $email;

    public function __construct($name, $surname, $email) {
        self::$name = $name;
        self::$email = $email;
        self::$surname = $surname;
    }

    public function getName() {
        return self::$name;
    }

    public function getSurname() {
        return self::$surname;
    }

    public function getEmail() {
        return self::$email;
    }

}
