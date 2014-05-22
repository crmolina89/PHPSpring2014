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
        <link href="lib/style.css" media="all" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
        // put your code here
        // Set my variables   
            $signup = new Signup();
            $state = $signup->getStates();
            $errors = array();  
            
            // Set var calling function in signup class
            if ( $signup->isPostRequest()  ) {  
                // if the var goes to the function in class sign up
                // if returns true
                if ( $signup->entryIsValid() ) {
                    //This message will display
                    //echo '<div class="success">All fields are good';
                    // echo the class to set the look
                    echo '<div class="success">';
                    // display username
                    echo $signup->getUsername();
                    echo '<br \>';
                    // display state
                    echo $signup->getState();
                    echo '<br \>';
                    echo $signup->getComment();
                    // display user comments
                    echo '<br \>';
                    // display current date
                    echo $date = date('F j Y h:i:s A');
                    // close my div tag
                    echo '</div>';
                } else {
                    // Else it will call the get errors function in the class
                    $errors = $signup->getErrors();
                }
            }
            
        ?>
        
        <form name="mainform" action="#" method="post"> 
           <fieldset>
		<legend>Assessment Form:</legend>

                <label for="username">Username:</label>
                <input id="username" type="text" name="username" value='<?php echo $signup->getUsername(); ?>'/> <br /> 
                <?php echo Validator::getErrorMessageHTML('username', $errors); ?>
                
                <label for="state">State:</label>
                <select id="state" type="text" name="state">
                
                     <?php 
                     // Get the state as key value
                     foreach ($state as $key=>$value) {
                         // echo out the key as the values 
                     echo "<option value=\"$key\">$value</option>\n"; 
                         }
                ?>
                    
                </select> <br /> 
                <?php echo Validator::getErrorMessageHTML('state', $errors); ?>

                <label for="comments">Comments:</label>
                <textarea id="comments" type="text" name="comments"> </textarea> <br />
                <?php echo Validator::getErrorMessageHTML('comment', $errors); ?>

                <input type="submit" value="Submit" />
            </fieldset>
        </form>
        
    </body>
</html>