<?php
session_start();
include('inc_head.php');
if(isset($_POST['save']))
    {
        extract($_POST);
        include '../backend/database.php';
        $sql = "INSERT INTO staff (FNAME, LNAME) VALUES ('$FNAME', '$LNAME')";
      
        if($conn->query($sql) === true){
            echo "  <script>
                        alert('บันทึกสำเร็จ');
                        window.location.href='lplstaff.php';
                    </script>"; 
        } else{

            echo "  <script>
                        alert('บันทึกไม่สำเร็จ');
                        window.location.href='lplstaff.php';
                    </script>";   }
    }
//mysqli_close($conn);
?>