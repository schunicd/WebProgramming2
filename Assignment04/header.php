<h1>Sheridan Book Store</h1>

<a href="index.php">Home</a> | 

<?php 

    if(isset($_SESSION['username'])) 
    {
        
        echo "<a href='logout.php'> Logout </a>";
        echo " | <a href='view.php'> View Books </a>";
        echo " | <a href='insert.php'> Add Books </a>";
    
    } 
    else 
    {

        echo '<a href="register.php">Register</a> | ';
        echo "<a href='login.php'> Login </a>";
    
    }
    
?>

<hr>
