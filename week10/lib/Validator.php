<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Validator
 *
 * @author Christian
 */
class Validator {
    //put your code here
    
    /**
  * A static method to check if an email is valid.
  *
  * @param {String} [$email] - must be a valid email
  *
  * @return boolean
  */    
    public static function emailIsValid($email) {
        return ( is_string($email) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) != false );
    }
    
    
     /**
    * A static method to check if a name is valid.
    *
    * @param {String} [$name] - must be a valid name
    *
    * @return boolean
    */    
    public static function nameIsValid($name) {
        return ( is_string($name) && !empty($name) );       
    }
    
    /**
    * A static method to check if message are valid.
    *
    * @param {String} [$msg] - must be a valid Length
    *
    * @return boolean
    */    
    public static function messageIsValid($msg) {
        return ( is_string($msg) && !empty($msg) && strlen($msg) > 5 );    
    }
        

}
