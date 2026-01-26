<?php
include "../db/db_connect.php";
include "../authentication/auth.php";
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  echo "Invalid request";
  exit;
}

if (!isset($_POST['id'], $_POST['title'], $_POST['description'])) {
  echo "Missing fields";
  exit;
}

$id = (int) $_POST['id'];
$title = mysqli_real_escape_string($con, $_POST['title']);
$description = mysqli_real_escape_string($con, $_POST['description']);
$status = isset($_POST['status']) ? 1 : 0;

/* get old image */
$oldQuery = mysqli_query($con, "SELECT image FROM insights WHERE id = $id");
$oldData = mysqli_fetch_assoc($oldQuery);
$imageName = $oldData['image'];

/* if new image uploaded */
if (!empty($_FILES['image']['name'])) {

  // delete old image
  if (!empty($imageName)) {
    $oldPath = "../uploads/" . $imageName;
    if (file_exists($oldPath)) {
      unlink($oldPath);
    }
  }

  // upload new image
  $imageName = time() . "_" . $_FILES['image']['name'];
  move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/" . $imageName);
}

$query = "UPDATE insights SET 
          title='$title',
          description='$description',
          image='$imageName',
          status=$status
          WHERE id=$id";

if (mysqli_query($con, $query)) {
  echo "success";
} else {
  echo "update failed";
}
