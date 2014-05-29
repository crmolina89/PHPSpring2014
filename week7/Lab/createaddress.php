<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        Util::confirmAccess();
        
        // Get a var set it to the class states and call the function to get states
        $state_list = States::getState();
         $address = new AddressBook();
         
         
         if ( Util::isPostRequest() ) {
             
              $AddressbookModel = new AddressbookModel(filter_input_array(INPUT_POST));
              
              if ( $address->create($AddressbookModel) ) {
                  echo '<p>Address updated</p>';
              } else {
                   echo '<p>Address Could not update</p>';
              }
          }
         
         
        ?>
        
        <form name="mainform" action="#" method="post"> 
           <fieldset>
		<legend>Update:</legend>
                <label for="name">Name:</label> 
                <input id="name" type="text" name="name" value="" /> <br />
               
                <label for="address">Address:</label> 
                <input id="address" type="text" name="address" value="" /> <br />
               
                <label for="city">City:</label> 
                <input id="city" type="text" name="city" value="" /> <br />
               
                <label for="state">State:</label> 
                <select id="state" type="text" name="state">
                
                     <?php 
                 // it will loop through each state get a pair value    
                foreach ($state_list as $key => $value ) {
                   // it will echo out just the drop down
                       echo "<option value=\"$key\">$value</option>\n"; 
                }
                     
                ?>
                    
                </select> <br /> 
                              
                <label for="zip">ZIP:</label> 
                <input id="zip" type="text" name="zip" value="" /> <br />
               
                
                <input type="hidden" name="id" value="" />
                <input type="submit" value="Submit" />
            </fieldset>
        </form>
        <br />
        <a href="viewaddress.php">View Address</a>
        
        
    </body>
</html>