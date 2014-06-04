<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Password
 *
 * @author Christian
 */
class Password {
    //put your code here
    private $password;
    
    /**
    * A constructor that sets passcode from post by calling the function
     * then filtering the post
    *    
    * @return post value
    */  
    function __construct() {
        $this->setPassword(filter_input(INPUT_POST, 'password'));
    }
    
    /**
    * A getter to get the variable password
    *    
    * @return value
    */ 
    public function getPassword() {
        return $this->password;
    }

    /**
    * A setter that sets the variable password to what is in the var
    *    
    * @return value
    */ 
    public function setPassword($password) {
        $this->password = sha1($password);
    }
    
     /**
    * A function to determine if the password is valid
    * it calls method to get password and tests if whats in password 
    * is equal to config class pass_code 
    *    
    * @return boolean
    */ 
    public function isValidPassword(){
        // shortcut for if else checks to see if true (else) : false
        return ( $this->getPassword() === Config::PASS_CODE ? true : false );
    }
}
