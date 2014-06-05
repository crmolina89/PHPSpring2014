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
    * A static method to check if a website is valid.
    *
    * @param string $website must be a valid name
    *
    * @return boolean
    */    
    public static function websiteIsValid($website) {
        // If its a string and its not empty it will pass as valid name
        return ( is_string($website) && !empty($website) && preg_match('/[a-zA-Z]+/', $website) != 0);       
    }
    
  /**
  * A static method to check if an email is valid.
  *
  * @param string $email must be a valid email
  *
  * @return boolean
  */    
    public static function emailIsValid($email) {
        return ( is_string($email) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) != false );
    }
      
     /**
    * A static method to check if a password is valid.
    *
    * @param string $password must be a valid password
    *
    * @return boolean
    */    
    public static function passwordIsValid($password) {
        // If its a string, its not empty, and the string length is greater than 6 it will pass as valid
        return ( is_string ($password) && !empty ($password) && strlen($password) > 6 != false);
    }
    
}
