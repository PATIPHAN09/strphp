<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    $P = $_POST['password'];
    include 'database.php';
    //$sql=mysqli_query($conn,"SELECT * FROM userlogin where password = '$P' and user = '$user'");
    $sql=mysqli_query($conn,"SELECT * FROM userlogin where user = '$user' and  password = '$P'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
      
        header("Location: index.php"); 
    }
    else
    {
        echo "Invalid Password = " . $P;
    }
}
?>
