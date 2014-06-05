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
        <title>SaaS Project - Login</title>
         <link href="lib/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
                
        <h1>SaaS Project</h1>
        
        <fieldset>
            <legend>Login</legend>
            <!--Redirect user to the main site-->
            <p> Not a member, <a href="mainSignup.php">Signup</a></p>
 
            <?php $signup = new Signup();   
            
            if ( $signup->isPostRequest() ) {
                $checkcode = new Password();

                if ( $checkcode->isValidPassword() ) {
                    $_SESSION['validpassword'] = true;
                    Util::redirect('CMSpage');                   
                } else {                    
                    $msg = 'Passcode is not valid.';
                }
            }
            ?>    
            <form name="mainform" action="#" method="post">
 
                <label>Email:</label> <input type="text" name="email" /> <br />
                <?php echo $signup->map($signup); ?>
                <label>Password:</label> <input type="password" name="password" /> <br />
                <?php echo $signup->map($signup); ?>
                <input type="submit" value="Submit" />
 
            </form>
        </fieldset>
    </body>
</html>
