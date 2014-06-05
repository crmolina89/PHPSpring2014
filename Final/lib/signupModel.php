<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of signupModel
 *
 * @author Christian
 */
class signupModel extends DB{
    //put your code here
    
    /**
    * A method with constructor to set Database 
    *    
    */  
    function __construct() {
        $this->setDb();
    }
    
       public function create($signup) {
         $result = false;
        
        $website = $signup->getWebsite();
        $email = $signup->getEmail();
        $password = sha1($signup->getPassword());
        
         if ( null !== $this->getDB() ) {
            $dbs = $this->getDB()->prepare('insert into users set website = :website, email = :email, password = :password');
            $dbs->bindParam(':website', $website, PDO::PARAM_STR);
            $dbs->bindParam(':email', $email, PDO::PARAM_STR);
            $dbs->bindParam(':password', $password, PDO::PARAM_STR);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $result = intval($this->getDB()->lastInsertId());
            }
        
         }   
        
        return $result;
    }
}
