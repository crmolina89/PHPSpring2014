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
        <!--I started my table tag here-->
        <table>
        <?php
        
        // Here I sent the table to be shown with a set width and border
        echo "<table width='300' border='1'>";
        
        // Made a for loop
        // Declared a var set it equal to 1
        // Will run through until the var is less than or equal to 100
        // Will add one everytime
        for ($i = 1; $i <= 100; $i++){
            // Made a variable to catch the date 
            $date = date('F j Y h:i:s A'); 
            // Will do a modulus division if no remainder is left 
            if ($i % 2 == 0){
            // Will echo out the regular <tr> tag
            echo "<tr>";
            }
            // If a raminder is left it will change the background of the row to silver
            else {
                echo "<tr bgcolor ='silver'>";
            }
            // Here I display the number of the loop its in
            echo "<td>$i</td>";
            // Here I display the Date variable made above
            echo "<td>$date</td>";
            // The closing <tr> tag for the if else statement
            echo "</tr>";
            
        }
        ?>
        <!--closing table tag-->
        </table>
 
    </body>
</html>