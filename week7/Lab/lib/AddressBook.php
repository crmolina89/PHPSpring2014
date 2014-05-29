<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AddressBook
 *
 * @author Christian
 */
class AddressBook extends DB{
    //put your code here
    
    /**
    * A method with constructor to set Database 
    *    
    */  
    function __construct() {
        $this->setDb();
    }
    
    /**
    * A method to create $AddressbookModel 
    *    
    * @return boolean
    */  
    public function create($AddressbookModel) {
         $result = false;
        
        
         if ( null !== $this->getDB() && $AddressbookModel instanceof AddressbookModel) {
            $dbs = $this->getDB()->prepare('insert into addressbook set address = :address, city = :city, state = :state, zip = :zip, name = :name');
            $dbs->bindParam(':address', $AddressbookModel->address, PDO::PARAM_STR);
            $dbs->bindParam(':city', $AddressbookModel->city, PDO::PARAM_STR);
            $dbs->bindParam(':state', $AddressbookModel->state, PDO::PARAM_STR);
            $dbs->bindParam(':zip', $AddressbookModel->zip, PDO::PARAM_STR);
            $dbs->bindParam(':name', $AddressbookModel->name, PDO::PARAM_STR);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $result = true;
            }
        
         }   
        
        return $result;
    }
    
    /**
    * A method to update $AddressbookModel 
    *    
    * @return boolean
    */  
    public function update($AddressbookModel) {
        $result = false;
        
        
         if ( null !== $this->getDB() && $AddressbookModel instanceof AddressbookModel) {
            $dbs = $this->getDB()->prepare('update addressbook set address = :address, city = :city, state = :state, zip = :zip, name = :name where id = :id');
            $dbs->bindParam(':id', $AddressbookModel->id, PDO::PARAM_INT);
            $dbs->bindParam(':address', $AddressbookModel->address, PDO::PARAM_STR);
            $dbs->bindParam(':city', $AddressbookModel->city, PDO::PARAM_STR);
            $dbs->bindParam(':state', $AddressbookModel->state, PDO::PARAM_STR);
            $dbs->bindParam(':zip', $AddressbookModel->zip, PDO::PARAM_STR);
            $dbs->bindParam(':name', $AddressbookModel->name, PDO::PARAM_STR);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $result = true;
            }
        
         }   
        
        return $result;
    }
    
    /**
    * A method to read the id 
    *    
    * @return value
    */  
    public function read($id = 0) {
       if ($id !== 0) {
           return $this->readByID($id);
       } else {
           return $this->readAll();
       }
        
    }
    
    /**
    * A method to read the ID where there is present
    *    
    * @return value
    */  
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
    
     /**
    * A method to read every ID if not value is assigned
    *    
    * @return value
    */  
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
