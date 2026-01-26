<?php
include "../db/db_connect.php"; // DB connection
include "../authentication/auth.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Sanitize and get form data
    $title = mysqli_real_escape_string($con, $_POST['announcement_title']);
    $author = mysqli_real_escape_string($con, $_POST['announcement_author']);
    $description1 = mysqli_real_escape_string($con, $_POST['description1']);
    $description2 = mysqli_real_escape_string($con, $_POST['description2']);
    $status = isset($_POST['announcement_status']) ? 1 : 0;

    // Insert into database
    $sql = "INSERT INTO announcements 
            (announcement_title, announcement_author, description1, description2, announcement_status, created_at) 
            VALUES 
            ('$title', '$author', '$description1', '$description2', '$status', NOW())";

    if (mysqli_query($con, $sql)) {
        echo "success";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

} else {
    echo "Invalid request!";
}
?>
