<?php
include "../db/db_connect.php";
include "../authentication/auth.php";
if (isset($_POST['id'])) {

  $id = intval($_POST['id']);

  // Get image name
  $get = mysqli_query($con, "SELECT image FROM insights WHERE id=$id");
  $row = mysqli_fetch_assoc($get);

  if ($row && !empty($row['image'])) {
    $imgPath = "../uploads/" . $row['image'];
    if (file_exists($imgPath)) {
      unlink($imgPath);
    }
  }

  // Delete record
  $delete = mysqli_query($con, "DELETE FROM insights WHERE id=$id");

  if ($delete) {
    echo "success";
  } else {
    echo "error";
  }
}
?>
