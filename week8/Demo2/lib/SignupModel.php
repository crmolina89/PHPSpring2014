<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SignupModel
 *
 * @author Christian
 */
class SignupModel {
    //put your code here

    private $email;
    private $username;
    private $password;
    private $confirmpassword;
    
    
     function __construct($paramArr = array()) {        
        $this->map($paramArr);
    }

    
    public function map($paramArr) {
        
        if ( ! is_array($paramArr) ) {
            return false;
        }
        
        if ( array_key_exists('email', $paramArr) ) {
            $this->setEmail($paramArr['email']);
        }
        if ( array_key_exists('username', $paramArr) ) {
            $this->setUsername($paramArr['username']);
        }
        if ( array_key_exists('password', $paramArr) ) {
            $this->setPassword($paramArr['password']);
        }
        if ( array_key_exists('confirmpassword', $paramArr) ) {
            $this->setConfirmpassword($paramArr['confirmpassword']);
        }        
        
    }
    
    
    public function getEmail() {
        return $this->email;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getConfirmpassword() {
        return $this->confirmpassword;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setConfirmpassword($confirmpassword) {
        $this->confirmpassword = $confirmpassword;
    }


}