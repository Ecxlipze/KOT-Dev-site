<?php
include "../db/db_connect.php";
include "../authentication/auth.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Invalid request";
    exit;
}

$id = (int)($_POST['id'] ?? 0);
if ($id <= 0) {
    echo "Invalid blog ID";
    exit;
}

/* =========================
   SANITIZE INPUTS
========================= */
$title  = mysqli_real_escape_string($con, $_POST['blog_title'] ?? '');
$author = mysqli_real_escape_string($con, $_POST['blog_author'] ?? '');
$desc1  = mysqli_real_escape_string($con, $_POST['description1'] ?? '');
$desc2  = !empty($_POST['description2'])
          ? mysqli_real_escape_string($con, $_POST['description2'])
          : '';
$status = isset($_POST['blog_status']) ? 1 : 0;

if ($title === '' || $author === '' || $desc1 === '') {
    echo "Required fields missing";
    exit;
}

/* =========================
   GET OLD IMAGE
========================= */
$res = mysqli_query($con, "SELECT blog_image FROM blogs WHERE id=$id");
if (mysqli_num_rows($res) === 0) {
    echo "Blog not found";
    exit;
}
$row = mysqli_fetch_assoc($res);
$oldImage = $row['blog_image'] ?? '';

$imageName = $oldImage; // default

/* =========================
   NEW IMAGE (OPTIONAL)
========================= */
if (!empty($_FILES['blog_image']['name'])) {

    $tmpPath = $_FILES['blog_image']['tmp_name'];

    // Validate image
    $imageInfo = getimagesize($tmpPath);
    if ($imageInfo === false) {
        echo "Invalid image file";
        exit;
    }

    // Dimension check
    if ($imageInfo[0] !== 800 || $imageInfo[1] !== 400) {
        echo "Image must be exactly 800x400 pixels";
        exit;
    }

    // MIME check
    $allowed = ['image/jpeg', 'image/png', 'image/webp'];
    if (!in_array($imageInfo['mime'], $allowed)) {
        echo "Only JPG, PNG or WEBP images allowed";
        exit;
    }

    // Upload
    $uploadDir = "../uploads/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $imageName = time() . "_" . basename($_FILES['blog_image']['name']);

    if (!move_uploaded_file($tmpPath, $uploadDir . $imageName)) {
        echo "Image upload failed";
        exit;
    }

    // Delete old image
    if (!empty($oldImage) && file_exists($uploadDir . $oldImage)) {
        unlink($uploadDir . $oldImage);
    }
}

/* =========================
   UPDATE QUERY
========================= */
$query = "
    UPDATE blogs SET
        blog_title   = '$title',
        blog_author  = '$author',
        description1 = '$desc1',
        description2 = '$desc2',
        blog_image   = '$imageName',
        blog_status  = '$status'
    WHERE id = $id
";

if (mysqli_query($con, $query)) {
    echo "success";
} else {
    echo "Database error: " . mysqli_error($con);
}
