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
        <title>Login</title>
        
        <link rel='stylesheet' type='text/css' href='_css/bookStoreStyle.css'>
        
    </head>
    
    <body>
        
        <div id="wrapper">

            <?php
                
                require_once 'header.php';
                require_once 'session.php';
            
            ?>

            <h2>Login</h2>

            <form action="login1.php" method="post">
                
                <table>
                    
                    <tr>
                        
                        <td>Username:</td>
                        <td><input type="text" name="username" id="userName" autofocus></td>
                        
                    </tr>
                    
                    <tr>
                        
                        <td>Password:</td>
                        <td><input type="password" name="password" id="password"></td>
                        
                    </tr>
                    
                    <tr>
                        
                        <td colspan="2"><input type="submit" value="Login" id='logBtn'></td>
                        
                    </tr>
                    
                </table>
                
            </form>

            <p id="loginError"></p>
            
            <?php
            
                if(isset($_REQUEST['result']))
                {
                    
                    if($_REQUEST['result'] == "fail")
                        echo "<p>Login failed. Either username or password is incorrect.</p>";
                    
                }
            
            ?>
            
        </div>
        
    </body>
    
</html>
