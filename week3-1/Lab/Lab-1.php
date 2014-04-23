<!DOCTYPE html>
<!--
Using PHP try to see how you would solve the issue of putting an error class
into each input.  I created the class for you, and the solution is solved
but in the refactoring phase there has to be a better way.  Also make sure
to populate the post values back into the field. 

Goals:
1.  Re-populate post values into the input fields.
2.  Put the "inputerror" class into the input form fields if 
    they are not populated on a post.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            /* set up the classes */
            .error {
                border: 1px solid red;
                padding: 0.2em;
                color: red;
            }
            
            .inputerror {border: 1px solid red;}
        </style>
    </head>
    <body>
        <?php
        // set up the variables and check post set it to post
        $email = filter_input(INPUT_POST, 'email');
        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');
        
            // if there is something in post
            if ( !empty($_POST)) {
                
                // the variable errormessages is an array with each name set to a message
                $errorMessages = array(
                  "email" => 'email is invalid',  
                  "username" => 'username is not found',  
                  "password" => 'password does not work',  
                );

                // if there is something in email 
                if (!empty($email)) {
                    // it will go through and reset email to empty so it does not display anything
                    $errorMessages['email'] = '';
                } 
                    
                if (!empty($username)) {
                    $errorMessages['username'] = '';
                } 
                
                if (!empty($password)) {
                    $errorMessages['password'] = '';
                } 
            
             }
        ?>
        <!-- -->
        
        <h2> My Form Demo </h2>
       <form name="mainform" action="#" method="post">      
          <!-- here for !value! set it to what email is so it is always there doesnt have to be reentered-->
           Email: <input type="text" name="email" value="<?php echo $email; ?>"
                         <?php 
                         // if email is empty and post has something
                         if ( empty($email) && !empty($_POST) )
                             // it will change the class to input error
                             echo 'class="inputerror"';
                             ?>
                         /> <br /> 
            <?php 
            if ( !empty($errorMessages["email"]) ) 
                echo '<p class="error">',$errorMessages["email"], '</p>';
            ?>
            Username: <input type="text" name="username" value="<?php echo $username; ?>" 
                          <?php 
                         if ( empty($username) && !empty($_POST) )
                             echo 'class="inputerror"';
                             ?>
                             /> <br /> 
            <?php 
            if ( !empty($errorMessages["username"]) )
                echo '<p class="error">',$errorMessages["username"], '</p>';                
            ?>           
            Password: <input type="password" name="password" 
                         <?php 
                         if ( empty($password) && !empty($_POST) )
                             echo 'class="inputerror"';
                             ?>    
                             /> <br />
            <?php 
            if ( !empty($errorMessages["password"]) )
                echo '<p class="error">',$errorMessages["password"], '</p>';                
            ?>
            <br />
            <input type="submit" value="Submit" />                        
        </form>
    </body>
</html>