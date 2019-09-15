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
        <title>Add Books</title>
        
        <link rel='stylesheet' type='text/css' href='_css/bookStoreStyle.css'>
        
    </head>
    
    <body>
        
        <div id='wrapper'>
            
            <?php
            
                require_once "header.php";
                require_once 'session.php';
            
            ?>
        
            <body>

            <h2>Add Book</h2>

            <form action="insert1.php" method="post">
                <table>
                    <tr>
                        <td>Book Name:</td>
                        <td>
                            <input type="text" name="productName">
                        </td>
                    </tr>
                    <tr>
                        <td>Related Course:</td>
                        <td>
                            <input type="text" name="relatedCourse">
                        </td>
                    </tr>
                    <tr>
                        <td>Book Price:</td>
                        <td>
                            <input type="text" name="productPrice">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Add Book">
                        </td>
                    </tr>
                </table>
            </form>

            <?php
                
                if(isset($_REQUEST['result']))
                {
                    
                    if($_REQUEST['result'] == "success")
                        echo "<p>Success! New Book added.</p>";
                    
                    else if($_REQUEST['result'] == "duplicate")
                        echo "<p>Duplicate entry. Please add a new book.</p>";
                    
                    else
                        echo"<p>Failure! Please make sure all fields are entered correctly and try again.</p>";
                    
                }
            
            ?>
            
        </div>
            
    </body>
    
</html>
