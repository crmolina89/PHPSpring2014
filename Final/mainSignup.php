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
        <title>SaaS Project - Sign-up</title>
        <link href="lib/style.css" rel="stylesheet" type="text/css" href="css/admin.css" />
    </head>
    <body>
       
        <?php
        // put your code here
        // Set my variables   
            $signup = new Signup();
            $errors = array();  
            
            // Set var calling function in signup class
            if ( $signup->isPostRequest()  ) {  
                // if the var goes to the function in class sign up
                // if returns true
                if ( $signup->entryIsValid() ) {
                    //Redirects to login site
                    Util::redirect('login.php'); 
                } else {
                    // Else it will call the get errors function in the class
                    $errors = $signup->getErrors();
                }
            }
            
        ?>
        
        <h1>SaaS Project</h1>
        
        <fieldset>
            <legend>Signup</legend>
            <!-- Login will redirect to login on click-->
        <p> Already a member, <a href="login.php">Login</a></p>
         <form name="mainform" action="#" method="post">
            
             
                         <label>Web Site:</label> <input type="text" name="website" maxlength="30" /> <br />
                         <!-- This echos out the errors underneath each field-->
                         <?php echo Util::getErrorMessageHTML('website', $errors); ?>
             
                                                                       <!-- This echos out the value as what the user entered as mail-->
                          <label>Email:</label> <input type="text" name="email" value="<?php echo $signup->getEmail(); ?>" /> <br />
                               <!--Here called the get errors function in the util class to display in form-->
                          <?php echo Util::getErrorMessageHTML('email', $errors); ?>
            
                          <label>Password:</label> <input type="password" name="password" /> <br />
                          <!-- This echos out the errors underneath each field-->
                          <?php echo Util::getErrorMessageHTML('password', $errors); ?>
               
            <input type="submit" value="Submit" />
                        
        </form>
        </fieldset>
    </body>
</html>