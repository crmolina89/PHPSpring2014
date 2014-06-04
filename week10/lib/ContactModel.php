<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContactModel
 *
 * @author Christian
 */
class ContactModel {
    //put your code here
    private $email;
    private $from;
    private $message;
    private $token;
    
    
    function __construct($paramArr = array()) {        
        $this->map($paramArr);
    }
    
    
     public function map($paramArr) {        
        if ( is_array($paramArr) && count($paramArr) ) {                   
            foreach ($paramArr as $key => $value) {
                $method = 'set'.ucfirst($key);
                if( method_exists($this, $method) ) {
                    $this->$method($value);
                }
            }
        }       
    }
    public function getToken() {
        return $this->token;
    }

    public function setToken($token) {
        $this->token = $token;
    }

        public function getEmail() {
        return $this->email;
    }

    public function getFrom() {
        return $this->from;
    }

    public function getMessage() {
        return $this->message;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setFrom($from) {
        $this->from = $from;
    }

    public function setMessage($message) {
        $this->message = $message;
    }



}
