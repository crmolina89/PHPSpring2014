<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of shape
 *
 * @author Christian
 */
class shape {
    //put your code here
    
    
    private $shape;
    
    /*
     public function shape($shapeType){
     
        
    }*/
    
    public function __construct($shapeType) {
        $this->setShape($shapeType);
    }
    
    public function getShape() {
        return $this->shape;
    }

    protected function setShape($shape) {
        $this->shape = $shape;
    }
    
    

    
}