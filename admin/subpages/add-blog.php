<?php
// Database connection
include '../db/db_connect.php'; // ya aapka connection file
include "../authentication/auth.php";
// Initialize response
$response = "";

// Check if POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get form data safely
    $title = isset($_POST['blog_title']) ? trim($_POST['blog_title']) : '';
    $author = isset($_POST['blog_author']) ? trim($_POST['blog_author']) : '';
    $description1 = isset($_POST['description1']) ? trim($_POST['description1']) : '';
    $description2 = isset($_POST['description2']) ? trim($_POST['description2']) : '';
    $status = isset($_POST['blog_status']) ? 1 : 0; // Checkbox

    // Simple validation
    if (empty($title) || empty($author) || empty($description1)) {
        echo "Please fill all required fields.";
        exit;
    }

    // Prepare SQL statement
    $stmt = $con->prepare("INSERT INTO blogs (blog_title, blog_author, description1, description2, blog_status, created_at) VALUES (?, ?, ?, ?, ?, NOW())");
    $stmt->bind_param("ssssi", $title, $author, $description1, $description2, $status);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "Database error: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
} else {
    echo "Invalid request.";
}
?>
