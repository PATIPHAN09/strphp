
<?php
    session_start();
    extract($_POST);
    include '../backend/database.php';

    $sql = " DELETE FROM staff WHERE staff_id ='" . $_GET["staff_id"] . "'";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['delete_success'] = "Record deleted successfully";
        header("Location: lplstaff.php"); 
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

?>
