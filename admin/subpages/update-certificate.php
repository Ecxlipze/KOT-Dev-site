<?php
include "../db/db_connect.php"; // Adjust path if needed
include "../authentication/auth.php";
if($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get POST data and sanitize
    $id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
    $certificate_type = isset($_POST['certificate_type']) ? mysqli_real_escape_string($con, $_POST['certificate_type']) : '';
    $presented_to = isset($_POST['presented_to']) ? mysqli_real_escape_string($con, $_POST['presented_to']) : '';
    $achievement_date = isset($_POST['achievement_date']) ? mysqli_real_escape_string($con, $_POST['achievement_date']) : '';
    $status = isset($_POST['status']) && $_POST['status'] == '1' ? 1 : 0;

    if($id <= 0) {
        echo "Invalid ID";
        exit;
    }

    // Update query
    $sql = "UPDATE certificates SET 
                certificate_type='$certificate_type',
                presented_to='$presented_to',
                achievement_date='$achievement_date',
                status='$status'
            WHERE id=$id";

    if(mysqli_query($con, $sql)) {
        echo "success"; // This will trigger the success toast
    } else {
        echo "Database error: " . mysqli_error($con); // This will show error toast
    }

} else {
    echo "Invalid request method!";
}
?>
