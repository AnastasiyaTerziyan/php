<?php

namespace EntityNamespace;
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

    private $name;
    private $login;
    private $age;
    private $password;

    public function __construct($name, $login, $age, $password) {
        $this->name = $name;
        $this->login = $login;
        $this->age = $age;
        $this->password = $password;
    }

    public function getName() {
        return $this->name;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getAge() {
        return $this->age;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
    
    public function toString() {
        return "Name: " . $this->name . " Age: " . $this->age . " Login: " . $this->login;
    }


}
