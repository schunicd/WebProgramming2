<?php

    $host = 'localhost';
    $userName = 'schunicd_admin';
    $password = '8^Bk.OqBJvy]';
    $dbName = 'schunicd_assignment04';
    
    $conn = mysqli_connect($host, $userName, $password, $dbName);
    
    if(empty($conn))
    {
        
        die("Connection error: " . mysqli_connect_error());
        
    }
    
