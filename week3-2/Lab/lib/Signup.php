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
    //put your code here
    
    /*
     * Todo -   Store the POST values into a variable and 
     * Todo - output non-password fields back into the input value
     * Todo -   Validation for all input fields
     * Todo -   show message if there is an error other wise notify the 
     *          user that all the data submited is correct
     */
    
    
    private $email;
    private $username;
    private $password;
    private $confirmpassword;
   
    private $errors = array();
            
    function __construct() {
       
        $this->email = filter_input(INPUT_POST, 'email');      
        $this->username = filter_input(INPUT_POST, 'username');
        $this->password = filter_input(INPUT_POST, 'password');
        $this->confirmpassword = filter_input(INPUT_POST, 'confirmpassword');
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
    
   /**
    * A method to return all errors found in the post
    *
    * @return array
    */  
    public function getErrors() {
        return $this->errors;
    }
    
    
    
    /**
    * A method to check if a posted email is valid.
    * Adds a custom message to the errors list key["email"]
    *
    * @return boolean
    */    
    public function emailEntryIsValid() {
        
         $email = $this->getEmail();
         
         if ( empty($email) ) {
            $this->errors["email"] = "Email is missing.";
         } else if ( !Validator::emailIsValid($this->getEmail()) ) {
            $this->errors["email"] = "Email is not valid.";                
         }
        
        return ( empty($this->errors["email"]) ? true : false ) ;
    }
    
    /**
    * A method to check if a posted username is valid.
    * Adds a custom message to the errors list key["username"]
    *
    * @return boolean
    */    
    public function usernameEntryIsValid() {
        
         //todo put logic here (same as email)
        // set the var equal to function call of username
        $username = $this->getUsername();
         // If the field is empty
         if ( empty($username) ) {
             // Will send it to errors as username and display the message to user
            $this->errors["username"] = "Username is missing.";
            // Other test calls the validator class and nameisvalid function to test
            // the user name is it returns invalid the message is displayed to the user
         } else if ( !Validator::nameIsValid($this->getUsername()) ) {
            $this->errors["username"] = "Username is not valid.";                
         }
        //Will return if its empty and whether any errors are contained
        return ( empty($this->errors["username"]) ? true : false ) ;
    }
    
    /**
    * A method to check if a posted password is valid.
    * Adds a custom message to the errors list key["password"]
    *
    * @return boolean
    */    
    public function passwordEntryIsValid() {
        
         //todo put logic here (same as email)
        // also check if it matches confirmpassword
        // set the var equal to function call of getpassword
        $password = $this->getPassword();
         // If the fields empty
         if ( empty($password) ) {
             // Will send it to errors as username and display the message to user
            $this->errors["password"] = "Password is missing.";
         } 
         // Calls the password function above and if its not equal to the orgincal password returns error
         else if ( $this->getConfirmpassword() !== $this->getPassword() ){
             // Message displayed to user
             $this->errors["password"] = "Password does not match confirmation password.";
         }
         // Also goes test the password against the password is valid function in the validator class
         else if ( !Validator::passwordIsValid($this->getPassword()) ) {
            $this->errors["password"] = "Password is not valid.";                
         }
         //Will return if its empty and whether any errors are contained
        return ( empty($this->errors["password"]) ? true : false ) ;
    }
    
    
    /**
    * A static method to check if a Post request has been made.
    *    
    * @return boolean
    */    
    public function isPostRequest() {
        return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
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
        
        return ( count($this->errors) ? false : true );
    }
    
}