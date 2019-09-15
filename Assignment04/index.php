<?php session_start(); ?>

<!DOCTYPE html>
<!--
 Derek Schunicke
 991295326
 SYST10199 - Web Programming 
-->
<html>
    
    <head>
        
        <meta charset="UTF-8">
        <title>Sherdian Book Store</title>

        <link rel='stylesheet' type='text/css' href='_css/bookStoreStyle.css'>
        
    </head>
    
    <body>
        <div id="wrapper">
            
            <?php
            
                require_once "header.php";
                require_once 'session.php';
            
            ?>

            <h2>Welcome</h2>

            <p>This is a web application for keeping track of the books in Sheridan's book store.</p>
            
        </div>
        
    </body>
    
</html>
