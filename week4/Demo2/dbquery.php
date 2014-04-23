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
        
        //print_r($_GET);
        
        $id = filter_input(INPUT_GET, 'id');
        
        

         $db = new PDO(Config::DB_DNS, Config::DB_USER, Config::DB_PASSWORD);
        
            $dbs = $db->prepare('select * from signup where username = :id limit 1');
            $dbs->bindParam(':id', $id, PDO::PARAM_INT);
            
            $dbs->execute();
            $results = $dbs->fetch(PDO::FETCH_ASSOC);
            
             print_r($results)
       
        ?>
    </body>
</html>