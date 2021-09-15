<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);

    include 'database.php';
    $sql = mysqli_query($conn,"SELECT * FROM userlogin");
  



    $row  = mysqli_fetch_array($sql);
    
{
    // your code here
}
    if(is_array($row))
    {
        $_SESSION["user"] = $row['user'];
        $_SESSION["password"]=$row['password'];
  
        header("Location: home.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>