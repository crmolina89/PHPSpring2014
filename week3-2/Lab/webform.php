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
         <link href="css/style.css" media="all" rel="stylesheet" type="text/css" />
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
                    //This message will display
                    echo '<div class="success">All fields are good</div>';
                } else {
                    // Else it will call the get errors function in the class
                    $errors = $signup->getErrors();
                }
            }
                 //todo print out error in a list
                 // only if there is a count to the array
                 // else data must be all valid
                 // Made a UL list for errors
                   if ( count($errors) ) {
                echo '<ul class="error">';
                foreach ($errors as $value) {
                    echo '<li>',$value,'</li>';
                }
                echo '</ul>';
                }
                
                 
                  
            
          
        ?>
        
        
        <form name="mainform" action="#" method="post"> 
           <fieldset>
		<legend>Sign-up Form:</legend>
                <label for="email">E-mail:</label> 
                <input id="email" type="text" name="email" value="<?php echo $signup->getEmail(); ?>" /> <br />
                <!--Here called the get errors function in the util class to display in form-->
                <?php echo Util::getErrorMessageHTML('email', $errors); ?>
                
                <label for="username">Username:</label>
                <input id="username" type="text" name="username" value="<?php echo $signup->getUsername(); ?>" /> <br /> 
                <?php echo Util::getErrorMessageHTML('username', $errors); ?>
                
                <label for="password">Password:</label>
                <input id="password" type="password" name="password" /> <br />           
                <?php echo Util::getErrorMessageHTML('password', $errors); ?>
                
                <label for="confirmpassword">Confirm Password:</label>
                <input id="confirmpassword" type="password" name="confirmpassword" /> <br />           
                <?php echo Util::getErrorMessageHTML('confirmpassword', $errors); ?>

                <input type="submit" value="Submit" />
            </fieldset>
        </form>
    </body>
</html>