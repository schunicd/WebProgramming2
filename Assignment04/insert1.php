<?php
    
    require_once 'config.php';
    
    $productName = $_REQUEST['productName'];
    $relatedCourse = $_REQUEST['relatedCourse'];
    $productPrice = $_REQUEST['productPrice'];
    
    $query = "Select productName from tblProducts where productName =  '$productName'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) == 1)
    {
    
        header("location:insert.php?result=duplicate");
        ob_end_flush();
        die();
    
    }
    
    else if($productName == null || $relatedCourse == null || $productPrice == null || !is_numeric($productPrice))
    {
        
        header ("location:insert.php?result=fail");
        ob_end_flush();
        die();
        
    }
    else
    {
    
        $query = "insert into tblProducts (productName, relatedCourse, productPrice) values('$productName', '$relatedCourse', $productPrice)";
        
        $result = mysqli_query($conn, $query);
        
        header ("location:insert.php?result=success");
    }
    

