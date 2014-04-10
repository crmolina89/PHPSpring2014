<?php include 'Dependency.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Validate My Data</title>
    </head>
    <body>
        <?php
        // put your code here
        
        $name = 'Gabriel Forti';
        $email = 'myEMail@fffg.com';
       
        $validate = new Validator();
        
        if ( $validate->emailIsValid($email) ) {
            echo '<p>Email is valid</p>';
        } else {
            echo '<p>Email is <strong>NOT</strong> valid</p>';
        }
        
        ?>
    </body>
</html>