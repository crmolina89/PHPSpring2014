<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        
            function safeMessage($text) {
                    return  htmlspecialchars($text, ENT_QUOTES);
                    //htmlentities($string)
            }
            function xecho($text) {
               echo safeMessage($text);
            }
            
            $text = "<script>alert('hello');</script>";
            
            xecho($text);
            
            
            //PDO  
            
            
            //Session Rotation session_regenerate_id
            
            //password protect with sha1 or greater
            
            
            $salt = "sfsdfsd";
            $text = $text.$salt;
            
            
            
            echo sha1($text);
        ?>
    </body>
</html>