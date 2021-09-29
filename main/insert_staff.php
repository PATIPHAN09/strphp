<?php
session_start();
include('inc_head.php');
if(isset($_POST['save']))
    {
        extract($_POST);
        $date = date('Y-m-d');
        
        include '../backend/database.php';
        //$sql = "INSERT INTO staff (title, fname, lname, job_start, sex, dob, nat, eth, cid, bank, id_bank, createdate,updatedate,status) 
        //VALUES ('$TITLE', '$FNAME', '$LNAME', '$JOB_START','$SEX' ,'$DOB' ,'$NAT' ,'$ETH' ,'$CID' ,'$BANK' ,'$ID_BANK','$date' ,'$date' , 'y')";
        $sql = "INSERT INTO staff (title, fname, lname, jobstart,sex, dob, nat, eth, cid, bank, id_bank, createdate,updatedate,status) 
        VALUES ('$TITLE', '$FNAME', '$LNAME', '$JOB_START','$SEX' ,'$DOB' ,'$NAT' ,'$ETH' ,'$CID' ,'$BANK' ,'$ID_BANK','$date' ,'$date', 'y')";
      
        if($conn->query($sql) === true){
            $_SESSION['insert_success'] = "Record data successfully";
            header("Location: lplstaff.php"); 
        } else {
            $_SESSION['insert_fail'] = "Record data Fail!!!!";
           
            echo "  <script>
            
                        alert('$JOB_START');
                        window.location.href='lplstaff.php';
                    </script>";   
                }                    
    }
//mysqli_close($conn);
?>