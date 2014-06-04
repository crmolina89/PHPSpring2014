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
    
    private $website;
    private $email;
    private $password;
   
    private $errors = array();
            
    function __construct() {
       
        $this->website = filter_input(INPUT_POST, 'website');
        $this->email = filter_input(INPUT_POST, 'email');      
        $this->password = filter_input(INPUT_POST, 'password');
    }
    
    public function getWebsite(){
        return $this->website;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function getPassword() {
        return $this->password;
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
    * A method to check if a posted website is valid.
    * Adds a custom message to the errors list key["website"]
    *
    * @return boolean
    */    
    public function wesbiteEntryIsValid() {
        
         //todo put logic here (same as email)
        // set the var equal to function call of website
        $website = $this->getWebsite();
         // If the field is empty
         if ( empty($website) ) {
             // Will send it to errors as username and display the message to user
            $this->errors["website"] = "Website is missing.";
            // Other test calls the validator class and nameisvalid function to test
            // the user name is it returns invalid the message is displayed to the user
         } else if ( !Validator::websiteIsValid($this->getWebsite()) ) {
            $this->errors["website"] = "Website is not valid.";                
         }
        //Will return if its empty and whether any errors are contained
        return ( empty($this->errors["website"]) ? true : false ) ;
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
         //else if ( $this->getConfirmpassword() !== $this->getPassword() ){
             // Message displayed to user
         //    $this->errors["password"] = "Password does not match confirmation password.";
         //}
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
        $this->wesbiteEntryIsValid();
        $this->emailEntryIsValid();
        $this->passwordEntryIsValid();
        
        return ( count($this->errors) ? false : true );
    }
    
}
