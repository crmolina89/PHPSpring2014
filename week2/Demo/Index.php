<?php include 'Dependency.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
                
        $shape = new circle();
        echo $shape->getShape();
        
        $shape = new Square();
        echo $shape->getShape();
        
        // put your code here
        ?>
    </body>
</html>