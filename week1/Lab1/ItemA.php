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
        // Explode is used to take away what the delimiter is and 
        // print out what the user echos all together as a string
            // Example 1
            $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
            $pieces = explode(" ", $pizza);
            echo $pieces[0]; // piece1
            echo $pieces[1]; // piece2
            // Example 2
            $data = "foo:*:1023:1000::/home/foo:/bin/sh";
            list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
            echo $user; // foo
            echo $pass; // *
            echo $gid; // 1000
     
        // sha1 how to hash a string
            $str = 'apple';

            if (sha1($str) === 'd0be2dc421be4fcd0172e5afceea3970e2f3d940') {
                echo "Would you like a green or red apple?";
            }
        
        // htmlentities to wrap it with the characters when page source file is viewed used security
            $stri = "A 'quote' is <b>bold</b>";

            // Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
            echo htmlentities($stri);

            // Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
            echo htmlentities($stri, ENT_QUOTES);
        
        // md5 is another way to hash a string
            $strin = 'apple';

            if (md5($strin) === '1f3870be274f6c49b3e31a0c6728957f') {
                echo "Would you like a red apple or yellow banana?";
            }
            
        // strip_tags removes the tags and spits out the text or in example 2 allows the tags in quotes
            $input = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
            echo strip_tags($input);
            echo "\n";

            // Allow <p> and <a>
            echo strip_tags($input, '<p><a>');
            
        // trim used to take away unwanted characters or space
            $text   = "\t\tThese are a few words :) ...  ";
            $binary = "\x09Example string\x0A";
            $hello  = "Hello World";
            var_dump($text, $binary, $hello);

            print "\n";

            $trimmed = trim($text);
            var_dump($trimmed);

            $trimmed = trim($text, " \t.");
            var_dump($trimmed);

            $trimmed = trim($hello, "Hdle");
            var_dump($trimmed);

            $trimmed = trim($hello, 'HdWr');
            var_dump($trimmed);

            // trim the ASCII control characters at the beginning and end of $binary
            // (from 0 to 31 inclusive)
            $clean = trim($binary, "\x00..\x1F");
            var_dump($clean);
            
        // ucwords is used to uppercase the first character of each word in a string
            $foo = 'hello world!';
            $foo = ucwords($foo);             // Hello World!

            $bar = 'HELLO WORLD!';
            $bar = ucwords($bar);             // HELLO WORLD!
            $bar = ucwords(strtolower($bar)); // Hello World!
            
        // strlen returns the length of the given string
            $string = 'abcdef';
            echo strlen($string); // 6

            $string = ' ab cd ';
            echo strlen($string); // 7
            
        // str_shuffle simply used to shuffle a string then can use to return shuffled string
            $strings = 'abcdef';
            $shuffled = str_shuffle($strings);

            // This will echo something like: bfdaec
            echo $shuffled;
            
        // ord return ASCII value of character
            $stringa = "\n";
            if (ord($stringa) == 10) {
            echo "The first character of \$str is a line feed.\n";
            }
        ?>
    </body>
</html>