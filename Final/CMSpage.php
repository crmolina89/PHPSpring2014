<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SaaS Project - Admin</title>
        <link rel="stylesheet" type="text/css" href="lib/style.css" />
    </head>
    <body>
                 
        <h1>SaaS Project</h1>
        <!-- redirect to main signup page-->
        <a href="mainSignup.php">Logout</a>
        
         <fieldset>
        
        <legend> Edit your Page</legend>
                
        <!-- sends to view page preview on index-->
        <div id="preview"> <a href="index.php?page=test" target="popup">View Page</a></div>
        
         <form name="mainform" action="#" method="post">
                                                                    <!--INSERT-->
             <label> Title:</label> <input type="text" name="title" value="" /><br />            
             <label> Theme:</label> <select name="theme">
                <option value="theme1" >Theme 1</option>
                <option value="theme2" selected="selected">Theme 2</option>
                <option value="theme3" >Theme 3</option>
                 </select>
            <br />
                                                                    <!--INSERT AT VALUES-->
            <label> Address:</label> <input type="text" name="address" value="" /><br /> 
            <label> Phone:</label> <input type="text" name="phone" value="" /><br /> 
            <label> Email:</label> <input type="text" name="email" value="" /><br /> 
            <label> About:</label><br />
                                                <!--INSERT-->
            <textarea name="about" cols="50" rows="10"></textarea><br /> 
            
            <input type="submit" value="Submit" />
            
        </form>
        
         </fieldset>
        
    </body>
</html>
        