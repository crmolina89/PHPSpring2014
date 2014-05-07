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
            
        ?>
        
        <form name="mainform" action="#" method="post"> 
           <fieldset>
		<legend>Assessment Form:</legend>

                <label for="username">Username:</label>
                <input id="username" type="text" name="username" value='<?php echo $signup->getUsername(); ?>'/> <br /> 
                <?php echo Validator::getErrorMessageHTML('username', $errors); ?>
                
                <label for="state">State:</label>
                <select id="state" type="text" name="state">
                <?php foreach ($st)    
                    <option value ="<?php foreach ($state_list as $state) {
                echo "<option value=\"$state\"> $state </option>"; } ?>" </option> 
                </select> <br />  
                <?php echo Validator::getErrorMessageHTML('state', $errors); ?>

                <label for="comments">Comments:</label>
                <input id="comments" type="text" name="comments" /> <br />
                <?php echo Validator::getErrorMessageHTML('comment', $errors); ?>

                <input type="submit" value="Submit" />
            </fieldset>
        </form>
        
    </body>
</html>