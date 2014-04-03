<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
         <?php  
         
            //phpinfo();
         
            $pageTitle1 = "hello";
            $pageTitle2 = "everyone";
            $pageTitle3 = $pageTitle1." ".$pageTitle2;
            
            echo "<h1>$pageTitle3</h1>";
            echo '<h1>',$pageTitle3,'</h1>';
        ?>
        <select>
            <option></option>
        <?php
        // put your code here
        
        echo "<h1>hello everyone</h1>";
        
        $arr = array('red', 'green', 'blue');
        
        $arr2 = array( 'color1' => 'red', 'color2'=> 'green', 'color3' => 'blue');
        
        $i = 3;
        while ( $i-- ) {
            echo "<option>$arr[$i]</option>";            
        }
        
        foreach ($arr2 as $k => $v) {
         echo "<option value='$k'>$v</option>";    
        }
                
        
        ?>
            
           </select> 
            <?php
            /*
             * Testing from php.net
             * http://us3.php.net/manual/en/function.ucwords.php
             */
            
            $foo = 'hello world!';
            $foo = ucwords($foo);             // Hello World!

            $bar = 'HELLO WORLD!';
            $bar = ucwords($bar);             // HELLO WORLD!
            $bar = ucwords(strtolower($bar)); // Hello World!
            
            echo "<p>$foo</p>";
            echo "<p>$bar</p>";
            
            if ( $foo == $bar)
                echo "true";
            else 
                 echo "false";
            
            
            $isTrue = ( $foo == $bar ? true : false);
            
            
            //For debuging
            var_dump( $isTrue);
            print_r($arr2); //only for arrays
                
            //http://us3.php.net/manual/en/language.control-structures.php
            
            ?>

        
        
        
        <?php
            if ($i == 0) {
                echo "i equals 0";
            } elseif ($i == 1) {
                echo "i equals 1";
            } elseif ($i == 2) {
                echo "i equals 2";
            }

            switch ($i) {
                case 0:
                    echo "i equals 0";
                    break;
                case 1:
                    echo "i equals 1";
                    break;
                case 2:
                    echo "i equals 2";
                    break;
            }
            
            date($v)
        ?>
            
    </body>
</html>