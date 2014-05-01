<?php include 'dependency.php'; ?>
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
        // put your code here
        // set up the variables and check post set it to post
        $username = filter_input(INPUT_POST, 'username');
        $comments = filter_input(INPUT_POST, 'comments');
        $state = filter_input(INPUT_POST, 'state');
        $state_list = array('AL'=>"Alabama",  
			'AK'=>"Alaska",  
			'AZ'=>"Arizona",  
			'AR'=>"Arkansas",  
			'CA'=>"California",  
			'CO'=>"Colorado",  
			'CT'=>"Connecticut",  
			'DE'=>"Delaware",  
			'DC'=>"District Of Columbia",  
			'FL'=>"Florida",  
			'GA'=>"Georgia",  
			'HI'=>"Hawaii",  
			'ID'=>"Idaho",  
			'IL'=>"Illinois",  
			'IN'=>"Indiana",  
			'IA'=>"Iowa",  
			'KS'=>"Kansas",  
			'KY'=>"Kentucky",  
			'LA'=>"Louisiana",  
			'ME'=>"Maine",  
			'MD'=>"Maryland",  
			'MA'=>"Massachusetts",  
			'MI'=>"Michigan",  
			'MN'=>"Minnesota",  
			'MS'=>"Mississippi",  
			'MO'=>"Missouri",  
			'MT'=>"Montana",
			'NE'=>"Nebraska",
			'NV'=>"Nevada",
			'NH'=>"New Hampshire",
			'NJ'=>"New Jersey",
			'NM'=>"New Mexico",
			'NY'=>"New York",
			'NC'=>"North Carolina",
			'ND'=>"North Dakota",
			'OH'=>"Ohio",  
			'OK'=>"Oklahoma",  
			'OR'=>"Oregon",  
			'PA'=>"Pennsylvania",  
			'RI'=>"Rhode Island",  
			'SC'=>"South Carolina",  
			'SD'=>"South Dakota",
			'TN'=>"Tennessee",  
			'TX'=>"Texas",  
			'UT'=>"Utah",  
			'VT'=>"Vermont",  
			'VA'=>"Virginia",  
			'WA'=>"Washington",  
			'WV'=>"West Virginia",  
			'WI'=>"Wisconsin",  
			'WY'=>"Wyoming");
                
                        if ( count($_POST) ) {
                echo '<ul class="error">';
                foreach ($_POST as $value) {
                    echo '<li>',$value,'</li>';
                }
                echo '</ul>';
                }
                
        ?>
        
        <form name="mainform" action="#" method="post"> 
           <fieldset>
		<legend>Assessment Form:</legend>

                <label for="username">Username:</label>
                <input id="username" type="text" name="username" /> <br /> 
                
                <label for="state">State:</label>
                <select id="state" type="text" name="state"><option value ="<?php foreach($state_list as $value) {
                echo "<option value=\"$value\"> $value </option>"; } ?>" </option> </select> <br />           

                <label for="comments">Comments:</label>
                <input id="comments" type="text" name="comments" /> <br />           

                <input type="submit" value="Submit" />
            </fieldset>
        </form>
        
    </body>
</html>