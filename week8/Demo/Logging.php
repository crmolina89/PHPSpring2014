<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Logging
 *
 * @author Christian
 */
class Logging {
    //put your code here

    const   DEBUG	= "DEBUG",
            INFO	= "INFO",
            NOTICE	= "NOTICE",
            WARN	= "WARN",
            ERROR	= "ERROR",			
            UNKNOWN	= "UNKNOWN",			
            EXCEPTION	= "EXCEPTION",			
            FATAL	= "FATAL";

    public static function log($data, $type = LOG::DEBUG ) {
        if ( is_string($data) && strlen($data) ) {
                $refID = uniqid();
                $dataLog = "\r\n[" . $refID . "]\t[" . $type . "]\t[" .date( "m-d-Y g:ia" ) . "]\t"  . $data;
               if (  error_log($dataLog, 3, "logs/errors.log") ) {
                   
               }
        }
        return false;
    }
    
   
    
    public static function getLogs(){
        $returnValue = "";
        
        if ( is_dir("logs") && is_file("logs/errors.log") && file_exists("logs/errors.log") ) {
            
            $data = file_get_contents('logs/errors.log');
            
            $convert = explode("\n", $data); //create array separate by new line

            for ( $i = 0, $l = count($convert); $i < $l; $i++ ) {
                $returnValue .= '<p>'.$convert[$i].'</p> '; 
            }
            
            
        }
        return  $returnValue;
    }
    
}
