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
        
         $address = new AddressBook();
         
         $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
         
         $addressResult = $address->read($id);
          print_r($addressResult);
        
        ?>
    </body>
</html>