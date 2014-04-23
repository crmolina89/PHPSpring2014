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
        
        $dbc = new DB();
        $db = $dbc->getDB();
        
        if ( null !== $db) {
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
       
        }
        ?>
    </body>
</html>