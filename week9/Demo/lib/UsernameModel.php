<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsernameModel
 *
 * @author Christian
 */
class UsernameModel {
    //put your code here
    private $username;
    
    
    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        if (is_string($username) && !empty($username) && strlen($username) > 3) {
        $this->username = $username;
        }
    }

}
