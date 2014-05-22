<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link href="css/style.css" media="all" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
        // put your code here
                
            $signup = new Signup();
                    
            $dataModel = new SignupModel(filter_input_array(INPUT_POST));
              
          if ( Util::isPostRequest() ) {
            $id = $signup->save($dataModel);
            var_dump($id);
          }
          
        ?>
        
        
        <form name="mainform" action="#" method="post"> 
           <fieldset>
		<legend>Sign-up Form:</legend>
                <label for="email">E-mail:</label> 
                <input id="email" type="text" name="email" value="<?php echo $dataModel->getEmail(); ?>" /> <br />
                
                
                <label for="username">Username:</label>
                <input id="username" type="text" name="username" value="<?php echo $dataModel->getUsername(); ?>" /> <br /> 
                
                
                <label for="password">Password:</label>
                <input id="password" type="password" name="password" /> <br />           
            
                
                <label for="confirmpassword">Confirm Password:</label>
                <input id="confirmpassword" type="password" name="confirmpassword" /> <br />           
                

                <input type="submit" value="Submit" />
            </fieldset>
        </form>
    </body>
</html>