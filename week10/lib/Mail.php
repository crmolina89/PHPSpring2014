<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mail
 *
 * @author Christian
 */
class Mail extends MailModel {
    //put your code here
    
    public function mailParamsValid() {
        
      return (  Validator::emailIsValid($this->getTo()) && 
                Validator::nameIsValid($this->getFrom()) &&
                Validator::messageIsValid($this->getMessage())
              );  
    }
    public function send() {
        
        $to = Util::cleanForHtml($this->getTo());
        $subject = Util::cleanForHtml($this->getSubject()); 
        $message = Util::messageMailWrap(Util::cleanForHtml($this->getMessage())); 
                
       return mail($to, $subject, $message);
        
    }
    
    public function sendHtml() {
        
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                
        $to = Util::cleanForHtml($this->getTo());
        $subject = Util::cleanForHtml($this->getSubject()); 
        $from = Util::cleanForHtml($this->getFrom()); 
        $message = Util::cleanForHtml($this->getMessage());
        
        $html = '<html><body>';
        $html .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
        $html .= "<tr style='background: #eee;'><td><strong>From:</strong> </td><td>" . $from . "</td></tr>";
        $html .= "<tr><td><strong>Message:</strong> </td><td>" . $message . "</td></tr>";
        $html .= "</table>";
        $html .= "</body></html>";
       
        $html = Util::messageMailWrap($html);
        return mail($to, $subject, $html, $headers);
        
    }
    
    
}