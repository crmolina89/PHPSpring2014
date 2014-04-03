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
        
        <?php
            $colors = array('red','green','blue');
            shuffle($colors);
            $color = $colors[0];
        ?>
        
        <style>
            body {
                background-color : <?php echo $color; ?>
            }  
            
        </style>
        
    </head>
    <body>
        <h1> Refresh the page to get a dynamic background color </h1>
    </body>
</html>