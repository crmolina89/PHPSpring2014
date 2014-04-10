<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Page
 *
 * @author Christian
 */
class Page {
    //put your code here
    
    //property (variable)
    public $title = '';
    private $nav = array();
    
    function __construct($title, $nav) {
        $this->title = $title;
        $this->setNav($nav);
    }

    public function setNav($navArr) {
        
        if (is_array($navArr) && count($navArr) ) {
            
            //
            $this->nav = array_merge($this->nav,$navArr);
            return true;
        }
        return false;
    }
    
    private function isNavSet(){
       if ( is_array($this->nav) && count($this->nav) ) {
           return true;
       }
       return false;
    }


    //medthod (function)
    function buildNav(){
        $returnStr = "";
        if ( $this->isNavSet() ) {
            $returnStr .= '<ul>';
            foreach ($this->nav as $value) {
                $returnStr .= "<li>$value</li>";
            }
              $returnStr .= '</ul>';
        }
      return $returnStr;
    }
    
    
}