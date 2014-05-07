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
    private $username;
    private $comment;
   
    private $errors = array();
    
    private $state_list = array('AL'=>"Alabama",  
			'AK'=>"Alaska",  
			'AZ'=>"Arizona",  
			'AR'=>"Arkansas",  
			'CA'=>"California",  
			'CO'=>"Colorado",  
			'CT'=>"Connecticut",  
			'DE'=>"Delaware",  
			'DC'=>"District Of Columbia",  
			'FL'=>"Florida",  
			'GA'=>"Georgia",  
			'HI'=>"Hawaii",  
			'ID'=>"Idaho",  
			'IL'=>"Illinois",  
			'IN'=>"Indiana",  
			'IA'=>"Iowa",  
			'KS'=>"Kansas",  
			'KY'=>"Kentucky",  
			'LA'=>"Louisiana",  
			'ME'=>"Maine",  
			'MD'=>"Maryland",  
			'MA'=>"Massachusetts",  
			'MI'=>"Michigan",  
			'MN'=>"Minnesota",  
			'MS'=>"Mississippi",  
			'MO'=>"Missouri",  
			'MT'=>"Montana",
			'NE'=>"Nebraska",
			'NV'=>"Nevada",
			'NH'=>"New Hampshire",
			'NJ'=>"New Jersey",
			'NM'=>"New Mexico",
			'NY'=>"New York",
			'NC'=>"North Carolina",
			'ND'=>"North Dakota",
			'OH'=>"Ohio",  
			'OK'=>"Oklahoma",  
			'OR'=>"Oregon",  
			'PA'=>"Pennsylvania",  
			'RI'=>"Rhode Island",  
			'SC'=>"South Carolina",  
			'SD'=>"South Dakota",
			'TN'=>"Tennessee",  
			'TX'=>"Texas",  
			'UT'=>"Utah",  
			'VT'=>"Vermont",  
			'VA'=>"Virginia",  
			'WA'=>"Washington",  
			'WV'=>"West Virginia",  
			'WI'=>"Wisconsin",  
			'WY'=>"Wyoming");
            
    function __construct() {
          
        $this->username = filter_input(INPUT_POST, 'username');
        $this->comment = filter_input(INPUT_POST, 'comments');
        $this->state_list = filter_input(INPUT_POST, 'state');
    }

    
    public function getUsername() {
        return $this->username;
    }

    public function getComment() {
        return $this->comment;
    }
    
    public function getState() {
        return $this->state_list;
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
    public function commentEntryIsValid() {
        
         //todo put logic here (same as email)
        // set the var equal to function call of getComment
        $comment = $this->getComment();
         // If the fields empty
         if ( empty($comment) ) {
             // Will send it to errors as username and display the message to user
            $this->errors["comment"] = "Comment is missing.";
         } 
         // Also goes test the password against the password is valid function in the validator class
         else if ( !Validator::commentIsValid($this->getComment()) ) {
            $this->errors["comment"] = "Comment is not valid.";                
         }
         //Will return if its empty and whether any errors are contained
        return ( empty($this->errors["comment"]) ? true : false ) ;
    }
    
    public function stateEntryIsValid() {
        
         //todo put logic here (same as email)
        // set the var equal to function call of getComment
        $state = $this->getState();
         // If the fields empty
         if ( empty($state) ) {
             // Will send it to errors as username and display the message to user
            $this->errors["state"] = "State is missing.";
         } 
         //Will return if its empty and whether any errors are contained
        return ( empty($this->errors["state"]) ? true : false ) ;
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
        $this->usernameEntryIsValid();
        $this->commentEntryIsValidEntryIsValid();
        $this->stateEntryIsValid();
        
        return ( count($this->errors) ? false : true );
    }
    
    

}
