<?php
include "../db/db_connect.php";
include "../authentication/auth.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Invalid request";
    exit;
}

/* =========================
   REQUIRED FIELD CHECK
========================= */
if (
    empty($_POST['blog_title']) ||
    empty($_POST['blog_author']) ||
    empty($_POST['description1']) ||
    empty($_FILES['blog_image']['name'])
) {
    echo "All fields are required";
    exit;
}

/* =========================
   SANITIZE INPUTS
========================= */
$title   = mysqli_real_escape_string($con, $_POST['blog_title']);
$author  = mysqli_real_escape_string($con, $_POST['blog_author']);
$desc1   = mysqli_real_escape_string($con, $_POST['description1']);
$desc2   = !empty($_POST['description2'])
            ? mysqli_real_escape_string($con, $_POST['description2'])
            : '';
$status  = isset($_POST['blog_status']) ? 1 : 0;

/* =========================
   IMAGE VALIDATION
========================= */
$tmpPath = $_FILES['blog_image']['tmp_name'];

// Check valid image
$imageInfo = getimagesize($tmpPath);
if ($imageInfo === false) {
    echo "Invalid image file";
    exit;
}

$width  = $imageInfo[0];
$height = $imageInfo[1];

// STRICT dimension check
if ($width !== 800 || $height !== 400) {
    echo "Image must be exactly 800x400 pixels";
    exit;
}

// Optional: allow only JPG / PNG / WEBP
$allowedTypes = ['image/jpeg', 'image/png', 'image/webp'];
if (!in_array($imageInfo['mime'], $allowedTypes)) {
    echo "Only JPG, PNG or WEBP images allowed";
    exit;
}

/* =========================
   IMAGE UPLOAD
========================= */
$uploadDir = "../uploads/";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

$imageName = time() . "_" . basename($_FILES['blog_image']['name']);
$uploadPath = $uploadDir . $imageName;

if (!move_uploaded_file($tmpPath, $uploadPath)) {
    echo "Image upload failed";
    exit;
}

/* =========================
   INSERT INTO DATABASE
========================= */
$query = "
    INSERT INTO blogs 
    (blog_title, blog_author, description1, description2, blog_image, blog_status)
    VALUES
    ('$title', '$author', '$desc1', '$desc2', '$imageName', '$status')
";

if (mysqli_query($con, $query)) {
    echo "success";
} else {
    echo "Database error: " . mysqli_error($con);
}
