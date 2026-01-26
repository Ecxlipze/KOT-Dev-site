<?php
include "../db/db_connect.php"; // ensure path is correct
include "../authentication/auth.php";
if (isset($_POST['id'])) {
    $id = intval($_POST['id']);

    // Delete query
    $query = "DELETE FROM announcements WHERE id = $id";
    if (mysqli_query($con, $query)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "error";
}
?>
