<?php
// Database connection
include "../db/db_connect.php";
include "../authentication/auth.php";
// Sirf POST requests handle karen
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Input sanitize aur assign karen
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    $title = isset($_POST['announcement_title']) ? mysqli_real_escape_string($con, $_POST['announcement_title']) : '';
    $author = isset($_POST['announcement_author']) ? mysqli_real_escape_string($con, $_POST['announcement_author']) : '';
    $description1 = isset($_POST['description1']) ? mysqli_real_escape_string($con, $_POST['description1']) : '';
    $description2 = isset($_POST['description2']) ? mysqli_real_escape_string($con, $_POST['description2']) : '';
    $status = isset($_POST['announcement_status']) ? 1 : 0;

    // Check: announcement exist karta hai ya nahi
    $check = mysqli_query($con, "SELECT id FROM announcements WHERE id=$id");
    if(mysqli_num_rows($check) === 0){
        echo "Announcement not found!";
        exit;
    }

    // Update query
    $update = "UPDATE announcements SET 
                announcement_title='$title',
                announcement_author='$author',
                description1='$description1',
                description2='$description2',
                announcement_status=$status
               WHERE id=$id";

    if(mysqli_query($con, $update)){
        echo "success"; // AJAX me success handle ke liye
    } else {
        echo "Error: " . mysqli_error($con);
    }

} else {
    echo "Invalid request";
}
?>
