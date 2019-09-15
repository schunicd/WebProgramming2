<?php

    ob_start();

    require_once 'header.php';
    require_once 'config.php';
    
    $bookName = $_REQUEST['searchBook'];
    
    $query = "Select * from tblProducts where productName like '%$bookName%'";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) >= 1)
    {
        
        header('location:view.php?result=success&bookName=' . $bookName);  
        ob_end_flush();
        die();
        
    }
    
    else
    {
        
        header('location:view.php?result=NoBook');
        ob_end_flush();
        die();
        
    }

?>