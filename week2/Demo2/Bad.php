<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?Php 
    include 'Page.php';
?>

<?php
    
    $nav = array('link1','link2','link3');
    $page = new Page( "My PHP Page",$nav );
   
        
    $page->setNav(array('link4','link5','link6'));
    
    
    
  
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $page->title; ?></title>
    </head>
    <body>
        
 
        <?php
        echo '<h1>',$page->title,'</h1>';
        // put your code here
        echo $page->buildNav();
        ?>
    </body>
</html>