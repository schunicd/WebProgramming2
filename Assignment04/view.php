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
        <title>View Books</title>
        
        <link rel='stylesheet' type='text/css' href='_css/bookStoreStyle.css'>
        
    </head>
    
    <body>
        
        <div id='wrapper'>
        
            <?php

                require_once 'check_session.php';
                require_once "header.php";
                require_once 'session.php';
                require_once 'config.php';

            ?>

            

            <?php

                echo '<form action="search.php" method="post">';
                
                echo '<p>Enter Book Name below to refine searches: </p>';
                echo '<input type="text" name="searchBook" id="bookSearch"><br>';
                echo '<input type="submit" value="Search" id="bookSearch">';
                
                if($_REQUEST['result'] == "NoBook")
                            echo '<p id="error">The Book you have searched for does not match anything. Please search again</p>';
                
                echo '</form>';
            
                echo '<h2>Available Books</h2>';
            
                if(!isset($_REQUEST['result']) || $_REQUEST['result'] == "NoBook")
                {
                    $query = "select * from tblProducts";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0)
                    {

                        echo "<table>";
                        echo "<tr><th> Row #</th>";
                        echo "<th>Book Name</th>";
                        echo "<th>Related Course</th>";
                        echo "<th>Book Price</th></tr>";

                        $i = 1;

                        while ($row = mysqli_fetch_assoc($result)) 
                        {

                            echo "<tr><td>$i</td>";
                            echo "<td>" . $row['productName'] . "</td>";
                            echo "<td>" . $row['relatedCourse'] . "</td>";
                            echo "<td>" . $row['productPrice'] . "</td></tr>";

                            $i++;
                        }

                        echo "</table>";

                        echo '<br><br>';
                        
                    } 
                    
                }
                
                else
                {

                    $bookName = $_REQUEST['bookName'];

                    $query = "select * from tblProducts where productName like '%$bookName%'";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) 
                    {

                        echo "<table>";
                        echo "<tr><th> Row #</th>";
                        echo "<th>Book Name</th>";
                        echo "<th>Related Course</th>";
                        echo "<th>Book Price</th></tr>";

                        $i = 1;

                        while ($row = mysqli_fetch_assoc($result)) 
                        {

                            echo "<tr><td>$i</td>";
                            echo "<td>" . $row['productName'] . "</td>";
                            echo "<td>" . $row['relatedCourse'] . "</td>";
                            echo "<td>" . $row['productPrice'] . "</td></tr>";

                            $i++;
                        }

                        echo "</table>";

                        echo '<br><br>';

                    }

                }
                
            ?>

        </div>
        
    </body>
    
</html>
