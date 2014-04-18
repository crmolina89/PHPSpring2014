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
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
                
            $signup = new Signup();
            
            
        ?>
        
        
        <form name="mainform" action="#" method="post"> 
           <fieldset>
		<legend>Sign-up Form:</legend>
                <label for="email">E-mail:</label> 
                <input id="email" type="text" name="email" value="<?php echo $signup->getEmail(); ?>" /> <br />
                
                
                <label for="username">Username:</label>
                <input id="username" type="text" name="username" value="<?php echo $signup->getUsername(); ?>" /> <br /> 
                
                
                <label for="password">Password:</label>
                <input id="password" type="password" name="password" /> <br />           
            
                
                <label for="confirmpassword">Confirm Password:</label>
                <input id="confirmpassword" type="password" name="confirmpassword" /> <br />           
                

                <input type="submit" value="Submit" />
            </fieldset>
        </form>
    </body>
</html>