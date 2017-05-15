<?php

namespace ValidatorNamespace;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Validator
 *
 * @author root
 */
class Validator {
    
    public function __construct() {
        
    }

    public function validateUser($user){
        $notices = [];
       

        if (!strlen($user ->getName())) {
            $notices['name'] = 'Проверьте имя';
        }
        if (!strlen($user ->getLogin())) {
            $notices['login'] = 'Проверьте логин';
        }
        if (!strlen($user ->getAge()) || !filter_var($user ->getAge(), FILTER_VALIDATE_INT)) {
            $notices['age'] = 'Проверьте возраст';
        }
        if (!strlen($user ->getPassword())) {
            $notices['password'] = 'Проверьте пароль';
        }
        
        
        return $notices;
    }
}
