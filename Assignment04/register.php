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
        <title>Register New User</title>
        
        <link rel='stylesheet' type='text/css' href='_css/bookStoreStyle.css'>

    </head>
    <body>
        <div id="wrapper">
            <?php
                
                require_once 'header.php';
                require_once 'session.php';
            
            ?>

            <h2>Register</h2>

            <form action="register1.php" method="post">
                <table>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" autofocus></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Register" id='regBtn'></td>
                    </tr>
                </table>
            </form>

            <?php
                
                if (isset($_REQUEST['result']))
                {
                    
                    if($_REQUEST['result'] == "userexists")
                        echo "<p>This username is already taken. Please try again.</p>";
                    
                    else if($_REQUEST['result'] == "success")
                        echo "<p>Registration success!</p>";
                    
                    else if($_REQUEST['result'] == "fail")
                        echo "<p>New user not Registered. Please try again.</p>";
                        
                    
                }
            
            ?>
        </div>
    </body>
</html>
