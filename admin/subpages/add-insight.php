<?php
include "../db/db_connect.php";
include "../authentication/auth.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if (
    empty($_POST['title']) ||
    empty($_POST['description']) ||
    empty($_FILES['image']['name'])
  ) {
    echo "All fields are required";
    exit;
  }

  $title = mysqli_real_escape_string($con, $_POST['title']);
  $description = mysqli_real_escape_string($con, $_POST['description']);
  $status = isset($_POST['status']) ? 1 : 0;

  $image_name = time() . "_" . $_FILES['image']['name'];
  $tmp = $_FILES['image']['tmp_name'];

  move_uploaded_file($tmp, "../uploads/" . $image_name);

  $query = "INSERT INTO insights (title, description, image, status)
            VALUES ('$title', '$description', '$image_name', '$status')";

  if (mysqli_query($con, $query)) {
    echo "success";
  } else {
    echo "Database error";
  }
}
?>
