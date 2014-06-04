<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Util
 *
 * @author Christian
 */
class Util {
    
    /**
    * A static method to check if a Post request has been made.
    *    
    * @return boolean
    */    
    public static function isPostRequest() {
        return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
    }
    
    /**
    * A static method to check if a Get request has been made.
    *    
    * @return boolean
    */    
    public static function isGetRequest() {
        return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'GET' );
    }
    
    /**
    * Removes Anything that shouldn't contain html 
    * (pretty much everything that is not for input fields)
    * 
    * @params {String} [$s] - string to strip HTML
    *    
    * @return String
    */ 
    public static function cleanForHtml($s){
        return htmlentities(trim(strip_tags(stripslashes($s))), ENT_NOQUOTES, "UTF-8");
    }

    /**
    * Removes Anything that shouldn't contain html 
    * (pretty much everything that is for input fields)
    * 
    * @params {String} [$s] - string to strip HTML
    *    
    * @return String
    */ 
    public static function cleanForInputValue($s){                   
        return strip_tags(htmlentities(trim(stripslashes($s)), ENT_NOQUOTES, "UTF-8"));
    }
    
    /**
    * Wraps a string to 70 characters
    * message lines should not exceed 70 characters 
    * (PHP rule), so wrap it
    * 
    * @params {String} [$msg] - Text
    *    
    * @return String
    */ 
    public static function messageMailWrap($msg) {
      return wordwrap($msg, 70, "\r\n");        
    }
    
    
    public static function token() {	
	return sha1( uniqid(mt_rand(), true) );
    }

}

