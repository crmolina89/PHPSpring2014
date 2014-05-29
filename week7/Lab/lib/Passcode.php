<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Passcode
 *
 * @author Christian
 */
class Passcode {
    //put your code here

    private $passcode;
    
    /**
    * A constructor that sets passcode from post by calling the function
     * then filtering the post
    *    
    * @return post value
    */  
    function __construct() {
        $this->setPasscode(filter_input(INPUT_POST, 'passcode'));
    }
    
    /**
    * A getter to get the variable passcode
    *    
    * @return value
    */ 
    public function getPasscode() {
        return $this->passcode;
    }

    /**
    * A setter that sets the variable passcode to what is in the var
    *    
    * @return value
    */ 
    public function setPasscode($passcode) {
        $this->passcode = $passcode;
    }
    
     /**
    * A function to determine if the passcode is valid
    * it calls method to get passcode and tests if whats in pass_code 
    * is equal to config class pass_code 
    *    
    * @return boolean
    */ 
    public function isValidPasscode(){
        // shortcut for if else checks to see if true (else) : false
        return ( $this->getPasscode() === Config::PASS_CODE ? true : false );
    }



}
