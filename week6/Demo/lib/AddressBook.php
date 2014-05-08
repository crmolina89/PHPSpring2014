<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Address
 *
 * @author Christian
 */
class AddressBook extends DB {
    //put your code here
    
    function __construct() {
        $this->setDb();
    }
    
    public function create() {
        
    }
    
    public function update() {
        
    }
    
    public function read($id = 0) {
       if ($id !== 0) {
           return $this->readByID($id);
       } else {
           return $this->readAll();
       }
        
    }
    
     private function readByID($id){
           $results = array();
           
            if ( null !== $this->getDB() ) {
            $dbs = $this->getDB()->prepare('select * from addressbook where id = :id limit 1');
            $dbs->bindParam(':id', $id, PDO::PARAM_INT);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $results = $dbs->fetch(PDO::FETCH_ASSOC);
            }
        
         }   
           
           return $results;
     }
    
    private function readAll(){
         $results = array();
        
         if ( null !== $this->getDB() ) {
            $dbs = $this->getDB()->prepare('select * from addressbook');
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
            }
        
         }        
        return $results;
    }




    public function delete() {
        
    }
    
}
