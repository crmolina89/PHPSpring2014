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
    </head>
    <body>
        <table>
        <?php
        
       
        
        echo "<table width='300' border='1'>";

        for ($i = 1; $i <= 100; $i++){
            
            $date = date('F j Y h:i:s A'); 
            if ($i % 2 == 0){
            echo "<tr>";
            }
            else {
                echo "<tr bgcolor ='silver'>";
            }
            echo "<td>$i</td>";
            echo "<td>$date</td>";
            echo "</tr>";
            
            
        }
        ?>
        </table>
    </body>
</html>