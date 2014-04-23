<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo Config::PAGE_TITLE; ?></title>
    </head>
    <body>
        <?php
        // put your code here
        
        $db = new PDO(Config::DB_DNS, Config::DB_USER, Config::DB_PASSWORD);
        
       $dbs = $db->prepare('select * from signup');
       $dbs->execute();
       $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
       
       echo '<table border="1">'; 
       echo '<tr><th>Index</th><th>ID</th><th>Email</th>';
       echo '<th>username</th><th>password</th></tr>';
       foreach ($results as $key => $value) {
           echo '<tr>';
            echo '<td>', $key ,'</td>';
            echo '<td>', $value['id'] ,'</td>';
            echo '<td>', $value['email'] ,'</td>';
            echo '<td>', $value['username'] ,'</td>';
            echo '<td>', $value['password'] ,'</td>';          
           echo '</tr>';
       }
       echo '</table>';
       
       
         // print_r($results);      
          /*      
                
                 if ( NULL != $db ) {
                $statement = $db->prepare('select * from login where username = :user and password = :password limit 1');
                $statement->bindParam(':user', $email, PDO::PARAM_STR);
                $statement->bindParam(':password', $password, PDO::PARAM_STR);
                $statement->execute();
                $result = $statement->fetch(PDO::FETCH_ASSOC);
                if ( is_array($result) && array_key_exists("username", $result) ) { 
                        $dbo->closeDB();
                        print_r($result);                     
                }
            }
            $dbo->closeDB();
        */
        ?>
    </body>
</html>