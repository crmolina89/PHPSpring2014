<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Signup
 *
 * @author Christian
 */
class Signup {
    
    protected $errors = array();
    
    public $email;
    public $username;
    public $password;
    public $confirmPassword;
    
    public function __construct() {
        $this->email = filter_input(INPUT_POST, 'email');
        $this->username = filter_input(INPUT_POST, 'username');
        $this->password = filter_input(INPUT_POST, 'password');
        $this->confirmPassword = filter_input(INPUT_POST, 'confirmPassword');        
    }




    /**
    * A method to check if a posted email is valid.
    * Adds a custom message to the errors list key["email"]
    *
    * @return boolean
    */ 
    public function entryIsValid(){
        $this->emailEntryIsValid();
        $this->usernameEntryIsValid();
        $this->passwordEntryIsValid();
        $this->ComfirmPasswordEntryIsValid();
        return ( count($this->errors) ? false : true );
    }
    
    
    /**
    * A method to check if a posted username is valid.
    * Adds a custom message to the errors list key["username"]
    *
    * @return boolean
    */    
    public function usernameEntryIsValid() {
                
        return true ;
    }
    
    /**
    * A method to check if a posted password is valid.
    * Adds a custom message to the errors list key["username"]
    *
    * @return boolean
    */    
    public function passwordEntryIsValid() {
                
        return true ;
    }
    
    /**
    * A method to check if a posted confirm password is valid.
    * Adds a custom message to the errors list key["confirmpassword"]
    *
    * @return boolean
    */    
    public function ComfirmPasswordEntryIsValid() {
                
        return true ;
    }
    
    /**
    * A method to check if a posted email is valid.
    * Adds a custom message to the errors list key["email"]
    *
    * @return boolean
    */    
    public function emailEntryIsValid() {
         
         if ( empty($this->email) ) {
            $this->errors["email"] = "Email is missing.";
         } else if ( !Validator::emailIsValid($this->email) ) {
            $this->errors["email"] = "Email is not valid.";                
         } 
        
        return ( empty($this->errors["email"]) ? true : false ) ;
    }
    
    
    /**
    * A method to return all errors found in the post
    *
    * @return array
    */  
    public function getErrors() {
        return $this->errors;
    }
    
}