<?php
include "../db/db_connect.php";
include "../authentication/auth.php";
if($_SERVER['REQUEST_METHOD'] === 'POST'){

    // Sanitize POST data
    $certificate_type = isset($_POST['certificate_type']) ? mysqli_real_escape_string($con, $_POST['certificate_type']) : '';
    $presented_to     = isset($_POST['presented_to']) ? mysqli_real_escape_string($con, $_POST['presented_to']) : '';
    $achievement_date = isset($_POST['achievement_date']) ? $_POST['achievement_date'] : '';
    $status           = isset($_POST['status']) ? 1 : 0;

    // Validation
    if(empty($certificate_type) || empty($presented_to) || empty($achievement_date)){
        echo "All fields are required";
        exit;
    }

    // Insert query
    $sql = "INSERT INTO certificates (certificate_type, presented_to, achievement_date, status) 
            VALUES ('$certificate_type', '$presented_to', '$achievement_date', $status)";

    if($con->query($sql)){
        echo "success";
    } else {
        echo "Database error: " . $con->error;
    }

} else {
    echo "Invalid request";
}

$con->close();
?>
