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
        <?php
           /*
            * $_POST is a super global that is generated by PHP
            * It starts off as an empty array and gets populated
            * when a post is made by a form.  Notice that the method
            * the form uses to send the data back to PHP is "post"
            * the action is the page to send the data to, which with
            * "#" is sends the data back to the same page.
            * 
            * the name in the input fields are important as they will be
            * the key in the $_POST array $_POST["key"]
            * e.g $_POST["email"]
            */
            print_r($_POST);
            //print_r($_GET);
            
            if ( !empty($_POST) ) {
                
                $email = $_POST['email'];
                $email = filter_input(INPUT_POST, 'email');
                
                
                if ( null == $email)
                    echo "<p>Please fill out all fields";
            }
        ?>
        
        <h2> My Form Demo </h2>
           <form name="mainform" action="#" method="post">            
                Email: <input type="text" name="email" /> <br />           
                Username: <input type="text" name="username" /> <br />          
                Password: <input type="password" name="password" /> <br />           
                <input type="submit" value="Submit" />                        
            </form>
    </body>
</html>