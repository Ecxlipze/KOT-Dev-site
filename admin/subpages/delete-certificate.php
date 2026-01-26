<?php
include "../db/db_connect.php"; // adjust path if needed
include "../authentication/auth.php";
if(isset($_POST['id'])) {
    $id = intval($_POST['id']);

    $query = "DELETE FROM certificates WHERE id = $id";
    if(mysqli_query($con, $query)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "error";
}
?>
