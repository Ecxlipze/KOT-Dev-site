<?php
include "../db/db_connect.php";
include "../authentication/auth.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check required fields
    if (
        empty($_POST['news_title']) ||
        empty($_POST['news_description']) ||
        empty($_FILES['news_image']['name']) ||
        empty($_POST['news_type']) // Type is required
    ) {
        echo "All required fields must be filled and type selected";
        exit;
    }

    // Sanitize inputs
    $title = mysqli_real_escape_string($con, $_POST['news_title']);
    $description = mysqli_real_escape_string($con, $_POST['news_description']);
    $status = isset($_POST['news_status']) ? 1 : 0;
    $type = mysqli_real_escape_string($con, $_POST['news_type']);
    $video = isset($_POST['video_url']) ? mysqli_real_escape_string($con, $_POST['video_url']) : NULL;

    // Handle file upload
    $imageName = time() . "_" . $_FILES['news_image']['name'];
    $tmpName   = $_FILES['news_image']['tmp_name'];
    move_uploaded_file($tmpName, "../uploads/" . $imageName);

    // Insert query
    $query = "INSERT INTO news (title, description, image, status, type, video_url)
              VALUES ('$title', '$description', '$imageName', '$status', '$type', '$video')";

    if (mysqli_query($con, $query)) {
        echo "success";
    } else {
        echo "Database error: " . mysqli_error($con);
    }
}
