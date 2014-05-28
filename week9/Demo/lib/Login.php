<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Christian
 */
class Login extends DB {
    //put your code here
    
    function __construct() {
        $this->setDb();
    }

    
    public function usernameTaken( UsernameModel $usernameModel) {
        
        $username = $usernameModel->getUsername();
        $isTaken = false;
        
        if ( null !== $this->getDB() ) {
            $dbs = $this->getDB()->prepare('select username from signup '
                    . 'where username = :username limit 1');
            
            $dbs->bindParam(':username', $username, PDO::PARAM_STR);
            
            if ($dbs->execute() && $dbs->rowCount() > 0) {
                $isTaken = true;
            }
        }
        
        
    }
}
