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
  * A method to check if an email is valid.
  *
  *
  * @param string $email must be a valid email
  *
  * @return boolean
  */    
    public function emailIsValid($email) {
        
        if ( is_string($email) && !empty($email) && preg_match("/[A-Za-z0-9_]{2,}+@[A-Za-z0-9_]{2,}+\.[A-Za-z0-9_]{2,}/",$email) != 0 ) {
            return true;
        }
        
        return false;
    }
    
   /**
    * A method to check is a name is valid.
    *
    *
    * @param string $name must be a valid person name
    *
    * @return boolean
    */    
    public function nameIsValid($name) {
        
    }
}