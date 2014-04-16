<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        /*
         * The idea to populate form fields is to output the value
         * into the form field.  using the filter_input function we
         * can get the post value and echo it out into the input value
         * attribute
         */
        
            $email = filter_input(INPUT_POST, 'email');
            $username = filter_input(INPUT_POST, 'username');
            
        ?>
        
         <h2> My Form Demo </h2>
       <form name="mainform" action="#" method="post">            
            Email: <input type="text" name="email" value="<?php echo $email; ?>" /> <br />           
            Username: <input type="text" name="username" value="<?php echo $username; ?>" /> <br />          
            Password: <input type="password" name="password" value="" /> <br />           
            <input type="submit" value="Submit" />                        
        </form>
        
    </body>
</html>