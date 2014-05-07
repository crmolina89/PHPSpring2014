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
    * A static method to check if a name is valid.
    *
    * @param string $name must be a valid name
    *
    * @return boolean
    */    
    public static function nameIsValid($name) {
        // If its a string and its not empty it will pass as valid name
        return ( is_string($name) && !empty($name) );       
    }
    
    /**
    * A static method to check if a password is valid.
    *
    * @param string $password must be a valid password
    *
    * @return boolean
    */    
    public static function commentIsValid($comment) {
        // If its a string, its not empty, and the string length is greater than 6 it will pass as valid
        return ( is_string ($comment) && !empty ($comment) && strlen($comment) < 150 != false);
    }
    /**
    * A static method to create a error message template in HTML.
    *   
    * @param string $key must be a valid array key 
    * @param array $arr must be a valid array
     *  
    * @return string
    */ 
    public static function getErrorMessageHTML($key, $arr) {
        $msg = ( is_array($arr) && array_key_exists($key, $arr) ? $arr[$key] : NULL );
        return ( is_string($msg) && !empty($msg) ? "<p class=\"error\">$msg</p>" : "" );
    }
}
