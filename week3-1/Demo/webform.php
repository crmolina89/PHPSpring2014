<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Web Form</title>
    </head>
    <body>
        
        <?php
        
        /*
         * you can access the post data with $_POST or using the 
         * filter_input function.  It is recommended to use the 
         * filter_input function.  if you have to echo back data
         * to the page make sure to filter the user data from the post back
         * or use the htmlentities function for security.
         */
            print_r(htmlentities($_POST['email']));
            print_r($_SERVER['HTTP_HOST']);
            echo '<hr>';
            $email = filter_input(INPUT_POST, 'email');
            $username = filter_input(INPUT_POST, 'username');
            $password = filter_input(INPUT_POST, 'password');
            
            var_dump($email);
             echo '<hr>';
            var_dump($username);
             echo '<hr>';
            var_dump($password);
             echo '<hr>';
        
        ?>
        <h2> My Form Demo </h2>
       <form name="mainform" action="#" method="post">            
            Email: <input type="text" name="email" /> <br />           
            Username: <input type="text" name="username" /> <br />          
            Password: <input type="password" name="password" /> <br />           
            <input type="submit" value="Submit" />                        
        </form>
    </body>
</html>