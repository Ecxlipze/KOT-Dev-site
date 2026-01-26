<?php
include "../db/db_connect.php";
include "../authentication/auth.php";
if(isset($_POST['id'])) {
    $id = intval($_POST['id']);

    // Get image file name to delete from server
    $result = mysqli_query($con, "SELECT image FROM new_year WHERE id=$id");
    if($row = mysqli_fetch_assoc($result)) {
        $file = "../uploads/" . $row['image'];
        if(file_exists($file)) unlink($file); // Delete image file
    }

    // Delete record from database
    if(mysqli_query($con, "DELETE FROM new_year WHERE id=$id")) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
