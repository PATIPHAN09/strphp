
<?php
    session_start();
    extract($_POST);
    include '../backend/database.php';

    $sql = "DELETE FROM staff WHERE STAFF='" . $_GET["STAFF"] . "'";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        header("Location: index.php"); 
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

?>
