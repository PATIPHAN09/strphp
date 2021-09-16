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
        $_SESSION["user"] = $user;
        $_SESSION['flash_message'] = "I'm a flash message'";
        
        header("Location: index.php"); 
    }
    else
    {
        echo "<h1>ID is not $user </h1>";
        echo "PASSWORD is not =" . $P ."I Kuy";
  
    }
}
?>
