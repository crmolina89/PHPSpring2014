<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DB
 *
 * @author Christian
 */
class DB {
    
    protected $db = null;

    public function setDb() {
        try {
           $this->db = new PDO(Config::DB_DNS, Config::DB_USER, Config::DB_PASSWORD);
       } catch (Exception $ex) {
          $this->closeDB();
       }
    }

    public function getDB() { 
      return $this->db;        
    }
    
     public function closeDB() {        
        $this->db = null;        
    }
    
}